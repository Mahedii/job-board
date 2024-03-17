<?php

namespace App\Http\Controllers\v1\JobSeeker;

use Exception;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\v1\careepick\Year;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\v1\careepick\Universities;
use App\Models\v1\careepick\EducationLevels;
use App\Models\v1\careepick\SchoolAndCollege;
use App\Models\v1\careepick\EducationSubjects;
use App\Models\v1\careepick\EducationResultType;
use App\Models\v1\careepick\JobSeeker\JobSeeker;
use App\Models\v1\careepick\EducationDegreeTitle;
use App\Models\v1\careepick\JobSeeker\JobSeekerEducations;

class ResumeBuilderController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function myResumePage(): view
    {
        // $schoolAndCollegeData = SchoolAndCollege::getAllSchoolAndCollegeData();
        // $universitiesData = Universities::getAllUniversitiesData();
        $educationLevelsData = EducationLevels::all();
        $educationResultTypeData = EducationResultType::all();
        $educationDegreeTitleData = EducationDegreeTitle::select("*")->get();
        $educationSubjectsData = EducationSubjects::select("*")->get();
        $educationResultTypeData = EducationResultType::select("*")->get();
        $yearsData = Year::select("*")->get();

        // $jobSeekerEducationsData = JobSeekerEducations::select("*")->where('job_seeker_id', app('jobSeeker')->id)->get();
        $jobSeekerEducationsData = JobSeekerEducations::with([
            'educationLevel',
            'educationDegreeTitle',
            'educationSubject',
            // Include other relationships as needed
        ])->where('job_seeker_id', app('jobSeeker')->id)->get();
        
        $jobSeekerEducationsData->transform(function ($item) {
            $level_name = $item->educationLevel->level_name;
            $level_icon = '';

            if ($item->school_name != null) {
                $institute_name = $item->school_name;
            } else if ($item->college_name != null) {
                $institute_name = $item->college_name;
            } else if ($item->madrasha_name != null) {
                $institute_name = $item->madrasha_name;
            } else if ($item->university_name != null) {
                $institute_name = $item->university_name;
            }

            switch ($level_name) {
                case 'PSC/5 pass':
                    $level_icon = 'P';
                    break;
                case 'JSC/JDC/8 pass':
                    $level_icon = 'J';
                    break;
                case 'Secondary':
                    $level_icon = 'S';
                    break;
                case 'Higher Secondary':
                    $level_icon = 'H';
                    break;
                case 'Diploma':
                    $level_icon = 'D';
                    break;
                case 'Bachelor':
                    $level_icon = 'B';
                    break;
                case 'Master':
                    $level_icon = 'M';
                    break;
                case 'Ph.D.':
                    $level_icon = 'Ph.D';
                    break;
                // Add more cases as needed
                default:
                    $level_icon = '';
            }

            // Add level_icon attribute to the educationLevel object
            $item->educationLevel->level_icon = $level_icon;
            $item->institute_name = $institute_name;

            return $item;
        });
        // dd($jobSeekerEducationsData);

        $data = [
            // 'schoolAndCollegeData' => $schoolAndCollegeData,
            // 'universitiesData' => $universitiesData,
            'educationLevelsData' => $educationLevelsData,
            'educationResultTypeData' => $educationResultTypeData,
            'educationDegreeTitleData' => $educationDegreeTitleData,
            'educationSubjectsData' => $educationSubjectsData,
            'educationResultTypeData' => $educationResultTypeData,
            'yearsData' => $yearsData,
            'jobSeekerEducationsData' => $jobSeekerEducationsData,
        ];

        return view('v1.careepick.dashboard.job-seeker.resume-builder', $data);
    }

    public function fetchDegreeTitleByEducationLevel(Request $request)
    {
        try{
            switch($request->requestedData) {
                case('education-level-degree'):
                    $data = EducationDegreeTitle::where('education_level_id', $request->educationLevelId)->get();
                    $formattedResponse = $this->formatResponse($data);
                    break;
                case('school-college-university'):
                    if ($request->institutionType == "1") {
                        $data = SchoolAndCollege::getAllDataByInstitutionType('School', 'School and College');
                    } else if ($request->institutionType == "2") {
                        $data = SchoolAndCollege::getAllDataByInstitutionType('College', 'School and College');
                    } else if ($request->institutionType == "3") {
                        $data = SchoolAndCollege::getAllDataByInstitutionType('Madrasha');
                    } else if ($request->institutionType == "4") {
                        $data = Universities::getAllUniversitiesData();
                    }
                    $formattedResponse = $this->formatResponse($data);
                    break;
                default:
                    $formattedResponse = [
                        'status' => 400,
                        'responseData' => null,
                        'message' => 'Something went wrong.',
                    ];
            }
            // $degreeTitles = EducationDegreeTitle::where('education_level_id', $educationLevelId)->get();
            return response()->json($formattedResponse);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response = [
                'status' => 400,
                'responseData' => null,
                'message' => $e->getMessage(),
            ];
            return response()->json($response);
        }
    }

    private function formatResponse($data)
    {
        if ($data) {
            $response = [
                'status' => 200,
                'responseData' => $data,
            ];
        } else {
            $response = [
                'status' => 400,
                'responseData' => null,
                'message' => 'No Data found',
            ];
        }

        return $response;
    }

    public function addEducation(Request $request)
    {
        try {
            $jobSeeker = JobSeeker::where('user_id', Auth::user()->id)->first();

            $jobSeekerEducationsArray = [
                'job_seeker_id' => $jobSeeker->id,
                'education_level_id' => $request->education_level,
                'education_subjects_id' => $request->major_subject,
                'education_board' => $request->education_board,
                'education_institute_type_id' => $request->institution_type,
                'education_result_type_id' => $request->result_type,
                'year_of_passing' => $request->exam_passing_year
            ];

            if ($request->exam_degree_title != null) {
                $jobSeekerEducationsArray['education_degree_title_id'] = $request->exam_degree_title;
            } else {
                $jobSeekerEducationsArray['education_degree_title'] = $request->exam_degree_title_1;
            }

            if ($request->institution_type == "1") {
                $jobSeekerEducationsArray['school_name'] = $request->institution_name;
            } else if ($request->institution_type == "2") {
                $jobSeekerEducationsArray['college_name'] = $request->institution_name;
            } else if ($request->institution_type == "3") {
                $jobSeekerEducationsArray['madrasha_name'] = $request->institution_name;
            } else if ($request->institution_type == "4") {
                $jobSeekerEducationsArray['university_name'] = $request->institution_name;
            }

            if ($request->exam_marks != null) {
                $jobSeekerEducationsArray['marks'] = $request->exam_marks;
            } else {
                $jobSeekerEducationsArray['cgpa'] = $request->exam_cgpa;
                $jobSeekerEducationsArray['scale'] = $request->grade_scale;
            }

            $response = JobSeekerEducations::create($jobSeekerEducationsArray);
            // dd($response);
            return redirect()->back()->with('add-education-message', "Education added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    /**
     * Fetch updated table data
     *
     * @param string $tableSecretKey
     * @param string $firstKeyValue
     * @return string
     */
    private function generateSlug(string $requestModel, string $firstKeyValue): string
    {
        $slug = Str::slug($firstKeyValue);
        // dd($slug,"show");

        if ($requestModel::where('slug', Str::slug($firstKeyValue))->exists()) {
            $original = $slug;

            $count = 1;

            while ($requestModel::where('slug', $slug)->exists()) {
                $slug = "{$original}-" . $count++;
            }

            return $slug;
        }
        return $slug;
    }
}
