<?php

namespace App\Http\Controllers\v1\careepick;

use App\Models\User;
use Illuminate\View\View;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jsRegistrationPage(): view
    {
        return view('v1.careepick.pages.auth.job-seeker.registar');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function jsPostRegistration(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ]);

        $data = $request->all();
        // dd($data);

        $createUser = $this->create($data);

        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $createUser->id,
            'token' => $token
        ]);

        // Mail::send('v1.careepick.pages.auth.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Email Verification Mail');
        // });

        $mailData = [
            'token' => $token,
        ];
        Mail::to($request->email)->send(new VerifyEmail($mailData));

        dd("Email is sent successfully.");

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function jsVerifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('login')->with('message', $message);
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jpRegistrationPage(): view
    {
        return view('v1.careepick.pages.auth.job-provider.registar');
    }

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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
