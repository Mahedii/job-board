<?php

namespace App\Http\Controllers\v1\JobSeeker;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeBuilderController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function myResumePage(): view
    {
        return view('v1.careepick.dashboard.job-seeker.resume-builder');
    }
}
