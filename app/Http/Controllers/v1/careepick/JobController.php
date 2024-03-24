<?php

namespace App\Http\Controllers\v1\careepick;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\v1\careepick\JobCategory;

class JobController extends Controller
{
    /**
     * redirect to job list page with required data
     *
     * @return view
     */
    public function index(): view
    {
        $jobCategoryData = JobCategory::withCount('jobs')->get();

        $data = [
            'jobCategoryData' => $jobCategoryData,
        ];

        return view('v1.careepick.pages.common.job-list', $data);
    }

    /**
     * redirect to job list page with required data
     *
     * @return view
     */
    public function fetchJobByCategory($id)
    {
        $jobCategoryData = JobCategory::withCount('jobs')->get();
        $jobCategoryData->transform(function ($item) use ($id) {
            if ($item->id == $id) {
                $item->isSelected = true;
            } else {
                $item->isSelected = false;
            }

            return $item;
        });

        $jobsData = Jobs::getJobsByCategory($id);
        $data = [
            'jobCategoryData' => $jobCategoryData,
            'jobsData' => $jobsData,
        ];

        // dd($data);

        return view('v1.careepick.pages.common.job-list', $data);
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function manageJob(): view
    {
        return view('v1.careepick.pages.employee.manage-job');
    }

    /**
     * redirect to detail page with required data
     *
     * @return view
     */
    public function jobDetail($slug): view
    {
        // $jobData = Jobs::select("*")->where('slug', $slug)->get();
        $jobData = Jobs::getJobDetail($slug);

        return view('v1.careepick.pages.common.job-detail', ['jobData' => $jobData]);
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function browseCategory(): view
    {
        return view('v1.careepick.pages.common.job-category');
    }
}
