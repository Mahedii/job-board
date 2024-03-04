<?php

namespace App\Http\Controllers\v1\careepick;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function job(): view
    {
        return view('v1.careepick.pages.common.job-list');
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
     * redirect to home page with required data
     *
     * @return view
     */
    public function jobDetail(): view
    {
        return view('v1.careepick.pages.common.job-detail');
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
