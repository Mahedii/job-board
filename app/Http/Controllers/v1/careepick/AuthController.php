<?php

namespace App\Http\Controllers\v1\careepick;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\View\View;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Exceptions\JWTException;

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

        $createUser = $this->create($data, 1);

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
            // dd($user);

            if (!$user->email_verified_at) {
                $verifyUser->user->email_verified_at = Carbon::now()->getTimestamp();
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        dd($message);

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
    public function create(array $data, int $userType)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $userType
        ]);
    }

    public function jsSignin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Please Enter Your Email',
            'password.required' => 'Please Enter Your password',
        ]);

        $credentials = $request->only('email', 'password');
        // $token = auth()->attempt($credentials);

        // if (!$token) {
        //     return response()->json([
        //         'message' => 'Unauthorized',
        //     ], 401);
        // }

        try {
            if (Auth::attempt($credentials)) {
                // $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
                // $user = Auth::user();
                // $token = JWTAuth::fromUser($user);
                $token = JWTAuth::attempt($credentials);
                Log::debug($token);

                $userType = auth()->user()->user_type;

                if ($userType == 1) {
                    return view('v1.careepick.dashboard.job-seeker.dashboard');
                }

                return $this->createNewToken($token);
            }
            return response()->json(['success' => false, 'message' => 'Login details are not valid'], 401);
        } catch (JWTException $e) {
            // Log::error($e);
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Could not create token'], 500);
        }
    }

    public function jsDetails()
    {
        return response()->json([
            'success' => true,
            'user' => Auth::user()
        ]);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'success' => true,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL(), // get the token expiration time from config/jwt.php
            'user' => auth()->user()
        ]);
    }

    public function jsDashboard()
    {
        if (Auth::check()) {
            return view('/admin.dashboard');
        }

        return redirect()->route("signin-page")->withSuccess('You are not allowed to access');
    }

    public function jsSignOut()
    {
        Session::flush();
        Auth::logout();

        return response()->json([
            'success' => true,
        ]);
    }
}
