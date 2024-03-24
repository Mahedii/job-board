<?php

namespace App\Http\Controllers\v1\careepick;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\v1\careepick\JobCategory;

class HomePageController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function index(): view
    {
        $jobCategoryData = JobCategory::withCount('jobs')->get();

        $data = [
            'jobCategoryData' => $jobCategoryData,
        ];

        return view('v1.careepick.pages.common.home', $data);
    }
}
