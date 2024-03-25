<?php

namespace App\Http\Controllers\v1\JobProvider;

use Exception;
use App\Models\Jobs;
use App\Models\AgeRange;
use App\Models\JobPlace;
use App\Models\JobNature;
use Illuminate\View\View;
use App\Models\SalaryType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ExperienceRange;
use App\Models\JobRequiredSkills;
use Illuminate\Support\Facades\DB;
use App\Models\v1\careepick\Skills;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\v1\careepick\JobCategory;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\JobProvider\JobPostRequest;

class JobPostController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jobPostPage(): view
    {
        $jobCategoryData = JobCategory::all();
        $salaryTypeData = SalaryType::all();
        $ageRangeData = AgeRange::select("*")->get();
        $experienceRangeData = ExperienceRange::select("*")->get();
        $jobNatureData = JobNature::select("*")->get();
        $jobPlaceData = JobPlace::select("*")->get();
        $skillsData = Skills::getAllData();

        // dd($jobSeekerEducationsData);

        $data = [
            // 'schoolAndCollegeData' => $schoolAndCollegeData,
            // 'universitiesData' => $universitiesData,
            'jobCategoryData' => $jobCategoryData,
            'salaryTypeData' => $salaryTypeData,
            'ageRangeData' => $ageRangeData,
            'experienceRangeData' => $experienceRangeData,
            'jobNatureData' => $jobNatureData,
            'jobPlaceData' => $jobPlaceData,
            'skillsData' => $skillsData,
        ];

        return view('v1.careepick.dashboard.job-provider.post-job', $data);
    }

    public function addJobPost(Request $request)
    {
        try {
            // dd($request);
            $formRequest = new JobPostRequest();
            $requestData = $request->except('_token');
            // Validate the incoming request with the rules defined in rulesForCreate() method
            $validator = Validator::make($requestData, $formRequest->rulesForCreate(), $formRequest->messages());

            // Check if validation fails
            if ($validator->fails()) {
                dd($validator);
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // dd($request);

            $data = $request->all();
            $data['company_id'] = app('jobProvider')->id;
            $data['slug'] = $this->generateSlug($data['job_title']);
            $skillSets = $data['skill_id'];

            unset($data['_token']);
            unset($data['skill_id']);
            // dd($data);

            $this->insertJobPost($data, $skillSets);

            return redirect()->back()->with('add-job-post-message', "Job post added successfully");
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function insertJobPost(array $data, $skillSets)
    {
        try {
            DB::transaction(function () use ($data, $skillSets) {
                // Instantiate a new Company model
                $jobPost = new Jobs();

                // Fill the model with data from the $data array
                $jobPost->fill($data);

                // Save the model to persist the data in the database
                $jobPost->save();
                // dd($jobPost);

                JobRequiredSkills::addSkills($jobPost->id, $skillSets);
            });

            // Both queries were successful
            // Commit the transaction
            DB::commit();
        } catch (\Exception $e) {
            // Something went wrong, so Roll back the transaction
            DB::rollBack();
            Log::error($e);
        }
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function manageJobPostsPage(): view
    {
        $jobsData = Jobs::getJobsByCompany(app('jobProvider')->id);
        // dd($jobsData);

        return view('v1.careepick.dashboard.job-provider.manage-jobs', ['jobsData' => $jobsData]);
    }

    /**
     * Generate slug
     *
     * @param string $value
     * @return string
     */
    private function generateSlug(string $value): string
    {
        $slug = Str::slug($value);
        // dd($slug,"show");

        if (Jobs::where('slug', Str::slug($value))->exists()) {
            $original = $slug;

            $count = 1;

            while (Jobs::where('slug', $slug)->exists()) {
                $slug = "{$original}-" . $count++;
            }

            return $slug;
        }
        return $slug;
    }
}
