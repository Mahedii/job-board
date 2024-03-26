<?php

namespace App\Http\Controllers\v1\JobSeeker;

use File;
use Exception;
use Carbon\Carbon;
// use Illuminate\Http\File;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\v1\careepick\Year;
use App\Models\v1\careepick\Month;
use App\Models\v1\careepick\Skills;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\v1\careepick\Languages;
use Illuminate\Database\Eloquent\Model;
use App\Models\v1\careepick\Universities;
use App\Models\v1\careepick\EducationLevels;
use App\Models\v1\careepick\SchoolAndCollege;
use App\Models\v1\careepick\EducationSubjects;
use App\Models\v1\careepick\EducationResultType;
use App\Models\v1\careepick\JobSeeker\JobSeeker;
use App\Models\v1\careepick\EducationDegreeTitle;
use App\Models\v1\careepick\JobSeeker\JobSeekerSkills;
use App\Models\v1\careepick\JobSeeker\JobSeekerLanguages;
use App\Models\v1\careepick\JobSeeker\JobSeekerEducations;
use App\Models\v1\careepick\JobSeeker\JobSeekerExperiences;
use App\Models\v1\careepick\JobSeeker\JobSeekerCertifications;
use App\Models\v1\careepick\JobSeeker\JobSeekerResearchPapers;

class ResumeBuilderController extends Controller
{
    private $months = [
        'January' => 1,
        'February' => 2,
        'March' => 3,
        'April' => 4,
        'May' => 5,
        'June' => 6,
        'July' => 7,
        'August' => 8,
        'September' => 9,
        'October' => 10,
        'November' => 11,
        'December' => 12,
    ];

    public function showResume()
    {
        $data = $this->getNecessaryData();

        return view('v1.careepick.dashboard.job-seeker.resume', $data);
    }

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
        $educationDegreeTitleData = EducationDegreeTitle::select("*")->get();
        $educationSubjectsData = EducationSubjects::select("*")->get();
        $educationResultTypeData = EducationResultType::select("*")->get();
        $yearsData = Year::select("*")->get();
        $monthsData = Month::select("*")->get();
        $languagesData = Languages::select("*")->get();
        $skillsData = Skills::getAllData();

        $data = $this->getNecessaryData();
        $data['educationLevelsData'] = $educationLevelsData;
        $data['educationResultTypeData'] = $educationResultTypeData;
        $data['educationDegreeTitleData'] = $educationDegreeTitleData;
        $data['educationSubjectsData'] = $educationSubjectsData;
        $data['yearsData'] = $yearsData;
        $data['monthsData'] = $monthsData;
        $data['languagesData'] = $languagesData;
        $data['skillsData'] = $skillsData;

        return view('v1.careepick.dashboard.job-seeker.resume-builder', $data);
    }

    private function getNecessaryData()
    {
        $jobSeekerData = JobSeeker::select("*")->where('user_id', Auth::user()->id)->get();
        // $jobSeekerData->transform(function ($jobSeeker) {
        //     if ($jobSeeker->jobseeker_dob != null) {
        //         dd($jobSeeker->jobseeker_dob);
        //         $jobSeeker->formatted_dob = Carbon::createFromFormat('m/d/Y', $jobSeeker->jobseeker_dob)->format('Y-m-d');
        //     }
        //     return $jobSeeker;
        // });
        $jobSeekerSkillsData = JobSeekerSkills::with(['skills'])->where('job_seeker_id', app('jobSeeker')->id)->get();
        $jobSeekerLanguagesData = JobSeekerLanguages::with(['language'])->where('job_seeker_id', app('jobSeeker')->id)->get();
        $jobSeekerResearchPapersData = JobSeekerResearchPapers::select("*")->where('job_seeker_id', app('jobSeeker')->id)->get();
        $jobSeekerCertificationData = JobSeekerCertifications::select("*")->where('job_seeker_id', app('jobSeeker')->id)->get();
        $jobSeekerExperiencesData = JobSeekerExperiences::select("*")->where('job_seeker_id', app('jobSeeker')->id)->get();

        $jobSeekerExperiencesData->transform(function ($item) {
            $startingTime = $item->start_month . ", " . $item->start_year;
            if ($item->end_year != null) {
                $endingTime = $item->end_month . ", " . $item->end_year;
            } else {
                $endingTime = "present";
            }
            $workingTime = $startingTime . " - " . $endingTime;
            $workingDuration = $this->calculateDuration($item->start_month, $item->start_year, $item->end_month, $item->end_year);

            $item->workingTime = $workingTime;
            $item->workingDuration = $workingDuration;

            return $item;
        });

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
            } elseif ($item->college_name != null) {
                $institute_name = $item->college_name;
            } elseif ($item->madrasha_name != null) {
                $institute_name = $item->madrasha_name;
            } elseif ($item->university_name != null) {
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
            'jobSeekerData' => $jobSeekerData,
            'jobSeekerEducationsData' => $jobSeekerEducationsData,
            'jobSeekerExperiencesData' => $jobSeekerExperiencesData,
            'jobSeekerCertificationData' => $jobSeekerCertificationData,
            'jobSeekerResearchPapersData' => $jobSeekerResearchPapersData,
            'jobSeekerLanguagesData' => $jobSeekerLanguagesData,
            'jobSeekerSkillsData' => $jobSeekerSkillsData,
        ];

        return $data;
    }

    private function calculateDuration($startMonth, $startYear, $endMonth, $endYear)
    {
        // Convert month names to numeric values
        $startMonthNumeric = $this->months[$startMonth];
        $endMonthNumeric = $endMonth ? $this->months[$endMonth] : date('n'); // Use current month if endMonth is null
        $endYear = $endYear ?? date('Y'); // Use current year if endYear is null

        // Calculate the total number of months
        $totalMonths = ($endYear - $startYear) * 12 + ($endMonthNumeric - $startMonthNumeric) + 1;

        // Calculate years and months
        $years = floor($totalMonths / 12);
        $months = $totalMonths % 12;

        return $years . "y " . $months . "m";

        return [
            'years' => $years,
            'months' => $months,
        ];
    }

    public function fetchDegreeTitleByEducationLevel(Request $request)
    {
        try {
            switch ($request->requestedData) {
                case ('education-level-degree'):
                    $data = EducationDegreeTitle::where('education_level_id', $request->educationLevelId)->get();
                    $formattedResponse = $this->formatResponse($data);
                    break;
                case ('school-college-university'):
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

    public function addGeneralInfo(Request $request)
    {
        try {
            // dd($request);
            // Get the JobSeeker instance
            $jobSeeker = JobSeeker::findOrFail($request->input('jobseeker_id'));

            // Get the old values
            $oldValues = $jobSeeker->toArray();

            // Get the new values from the request
            $newValues = $request->only([
                'jobseeker_name',
                'jobseeker_mail',
                'jobseeker_dob',
                'jobseeker_religion',
                'jobseeker_gender',
                'jobseeker_marital_status',
                'jobseeker_phone_no_1',
                'jobseeker_phone_no_2',
                'jobseeker_nid_no',
                'jobseeker_address',
                'jobseeker_career_summary'
            ]);

            // Compare old values with new values and update only the changed fields
            foreach ($newValues as $key => $newValue) {
                if ($newValue !== $oldValues[$key]) {
                    $jobSeeker->$key = $newValue;
                }
            }

            if ($request->hasfile('jobseeker_image')) {
                $file = $request->jobseeker_image;
                $filePath = $this->getPathForUploadedFile($file);
                $jobSeeker->jobseeker_image = $filePath;
            }

            // Save the changes
            $jobSeeker->save();

            // Redirect back or wherever you want
            return redirect()->back()->with('success', 'General info updated successfully');

            $jobSeekerArray = [
                'job_seeker_id' => app('jobSeeker')->id,
                'organization_name' => $request->organization_name,
                'designation' => $request->designation,
                'responsibilities' => $request->working_responsibilities,
                'start_month' => $request->from_month,
                'start_year' => $request->from_year,
            ];

            if ($request->currently_working != 1) {
                $jobSeekerArray['end_month'] = $request->to_month;
                $jobSeekerArray['end_year'] = $request->to_year;
            } else {
                $jobSeekerArray['currently_working'] = "yes";
            }

            JobSeeker::create($jobSeekerArray);
            return redirect()->back()->with('add-work-xp-message', "Work experience added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    /**
     * Get path for uploaded files
     *
     * @param object $file
     * @return string
     */
    private function getPathForUploadedFile(object $file): string
    {
        $fileExtension = $file->extension();
        $fileExtension = strtolower($file->getClientOriginalExtension());
        $fileName = "profile_image." . $fileExtension;

        $path = public_path('dashboard/assets/images/job-seeker/' . app('jobSeeker')->id);

        $this->createDirectory($path);

        // ResizeImage::make($file)->resize(300, 200)->save(public_path($filePath));
        if ($file->move($path, $fileName)) {
            $filePath = 'dashboard/assets/images/job-seeker/' . app('jobSeeker')->id . '/' . $fileName;
        }

        return $filePath;
    }

    /**
     * Create directory if not exist
     *
     * @param string $path
     * @return void
     */
    private function createDirectory(string $path): void
    {
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
    }

    public function addSkills(Request $request)
    {
        try {
            // dd($request);
            $request->validate([
                'skill_id' => 'required|array',
                'skill_id.*' => 'exists:skills,id', // Assuming 'skills' is the table name for skills
                // Add other validation rules if needed
            ]);

            // Call the addSkills method to save the skills
            JobSeekerSkills::addSkills([
                'job_seeker_id' => app('jobSeeker')->id, // Assuming you're storing the job seeker ID in the session
                'skill_id' => $request->skill_id,
                // Add other attributes if needed
            ]);

            // Redirect back with a success message or any other response
            return redirect()->back()->with('success', 'Skills added successfully.');
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function addWorkExperience(Request $request)
    {
        try {
            // dd($request);
            $jobSeekerWorkExperienceArray = [
                'job_seeker_id' => app('jobSeeker')->id,
                'organization_name' => $request->organization_name,
                'designation' => $request->designation,
                'responsibilities' => $request->working_responsibilities,
                'start_month' => $request->from_month,
                'start_year' => $request->from_year,
            ];

            if ($request->currently_working != 1) {
                $jobSeekerWorkExperienceArray['end_month'] = $request->to_month;
                $jobSeekerWorkExperienceArray['end_year'] = $request->to_year;
            } else {
                $jobSeekerWorkExperienceArray['currently_working'] = "yes";
            }

            JobSeekerExperiences::create($jobSeekerWorkExperienceArray);
            return redirect()->back()->with('add-work-xp-message', "Work experience added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function addCertification(Request $request)
    {
        try {
            $jobSeekerCertificationArray = [
                'job_seeker_id' => app('jobSeeker')->id,
                'certification_name' => $request->certification_name,
                'certification_institution' => $request->certification_institution,
                'certified_month' => $request->certified_month,
                'certified_year' => $request->certified_year,
            ];

            JobSeekerCertifications::create($jobSeekerCertificationArray);
            return redirect()->back()->with('add-certification-message', "Certification added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function addPublications(Request $request)
    {
        try {
            $jobSeekerPublicationsArray = [
                'job_seeker_id' => app('jobSeeker')->id,
                'research_paper_subject' => $request->research_paper_subject,
                'research_paper_summary' => $request->research_paper_summary,
                'research_paper_url' => $request->research_paper_url,
            ];

            JobSeekerResearchPapers::create($jobSeekerPublicationsArray);
            return redirect()->back()->with('add-publications-message', "Research paper added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function addLangugaes(Request $request)
    {
        try {
            $jobSeekerLangugaesArray = [
                'job_seeker_id' => app('jobSeeker')->id,
                'language_id' => $request->language_id,
                'proficiency' => $request->proficiency,
            ];

            JobSeekerLanguages::create($jobSeekerLangugaesArray);
            return redirect()->back()->with('add-languages-message', "Language paper added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
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
