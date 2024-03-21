<?php

namespace App\Http\Controllers\v1\JobProvider;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPostController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jobPostPage(): view
    {
        return view('v1.careepick.dashboard.job-provider.post-job');
    }
}
