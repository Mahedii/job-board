<?php

namespace App\Http\Controllers\v1\careepick;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function signin(): view
    {
        return view('v1.careepick.pages.auth.signin');
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function signup(): view
    {
        return view('v1.careepick.pages.auth.signup');
    }
}
