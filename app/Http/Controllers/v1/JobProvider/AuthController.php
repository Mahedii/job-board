<?php

namespace App\Http\Controllers\v1\JobProvider;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\View\View;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\v1\careepick\Year;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\v1\careepick\Country;
use App\Models\v1\careepick\Upazila;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\v1\careepick\District;
use Illuminate\Support\Facades\Session;
use App\Models\v1\careepick\EmployeeSize;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\v1\careepick\EmploymentType;
use App\Models\v1\careepick\JobSeeker\JobSeeker;
use App\Http\Requests\JobProvider\JobProviderRequest;
use App\Models\v1\careepick\Recruiter\Company;

class AuthController extends Controller
{
    private $user = [];

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jpRegistrationPage(): view
    {
        $employeeSizeData = EmployeeSize::select("*")->get();
        $employmentTypeData = EmploymentType::all();
        $yearsData = Year::select("*")->get();
        $countryData = Country::select("*")->get();
        $districtData = District::select("*")->get();
        $upazilaData = Upazila::select("*")->get();
        $data = [
            'employeeSizeData' => $employeeSizeData,
            'employmentTypeData' => $employmentTypeData,
            'yearsData' => $yearsData,
            'countryData' => $countryData,
            'districtData' => $districtData,
            'upazilaData' => $upazilaData,
        ];

        return view('v1.careepick.pages.auth.job-provider.registar', $data);
    }

    /**
     * redirect to home page with required data
     *
     * @return view
     */
    public function jpSigninPage(): view
    {
        return view('v1.careepick.pages.auth.job-seeker.signin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function jpPostRegistration(Request $request)
    {
        // dd($request);
        $formRequest = new JobProviderRequest();
        $requestData = $request->except('_token', 'method_type');
        // Validate the incoming request with the rules defined in rulesForCreate() method
        $validator = Validator::make($requestData, $formRequest->rulesForCreate(), $formRequest->messages());
        // $validatedData = $formRequest->validate($request->rulesForCreate());
        // $validatedData = $request->validate($request->rulesForCreate());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Extract and handle file inputs
        $companyLogo = $request->file('company_logo');
        $companyTradeLicenseDocument = $request->file('company_trade_license_document');

        // Insert data into the Company model
        $company = new Company();
        $company->fill($requestData);

        // Handle file uploads and store file paths in the database
        if ($companyLogo) {
            $company->company_logo = $companyLogo->store('company_logos', 'public');
        }
        if ($companyTradeLicenseDocument) {
            $company->company_trade_license_document = $companyTradeLicenseDocument->store('company_trade_license_documents', 'public');
        }

        // Save the Company model instance
        $company->save();

        dd($company);

        // $data = $request->all();
        // dd($data);

        // $createUser = $this->create($data, 1);
        // dd($createUser);

        // $token = Str::random(64);

        // UserVerify::create([
        //     'user_id' => $createUser->id,
        //     'token' => $token
        // ]);

        // Mail::send('v1.careepick.pages.auth.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Email Verification Mail');
        // });

        // $mailData = [
        //     'token' => $token,
        // ];
        // Mail::to($request->email)->send(new VerifyEmail($mailData));

        return Redirect()->back()->with('registrationMessage', 'A verification mail has been sent to your email address, please confirm your mail account.');
        // dd("Email is sent successfully.");

        // return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Fetch expected data
     *
     * @param Request $request
     */
    public function jpValidation(Request $request)
    {
        try {
            $response = $this->ajaxValidation($request);
            return response()->json($response);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Perform AJAX validation for a single input
     *
     * @return array
     */
    private function ajaxValidation($request): array
    {
        $rules = [];
        $messages = [];
        $fieldName = $request->field;
        $value = $request->value;
        $methodTypeValue = $request->methodTypeValue;

        // Instantiate the form request class based on the specified $requestClass
        $formRequest = new JobProviderRequest();
        if ($methodTypeValue === 'create') {
            if (method_exists($formRequest, 'rulesForCreate')) {
                // Get the validation rules for the specified field
                $rules = $formRequest->rulesForCreate();

                // Get the specific rule for the field
                $fieldRules = $rules[$fieldName] ?? [];

                // Create a temporary array with the validation rules for the specified field
                $tempRules = [$fieldName => $fieldRules];
            }
        } elseif ($methodTypeValue === 'update') {
            if (method_exists($formRequest, 'rulesForUpdate')) {
                // Get the validation rules for the specified field
                $rules = $formRequest->rulesForUpdate();

                // Get the specific rule for the field
                $fieldRules = $rules[$fieldName] ?? [];

                // Create a temporary array with the validation rules for the specified field
                $tempRules = [$fieldName => $fieldRules];
            }
        } else {
            if (method_exists($formRequest, 'rules')) {
                // Get the validation rules for the specified field
                $rules = $formRequest->rules();

                // Get the specific rule for the field
                $fieldRules = $rules[$fieldName] ?? [];

                // Create a temporary array with the validation rules for the specified field
                $tempRules = [$fieldName => $fieldRules];
            }
        }

        if (method_exists($formRequest, 'messages')) {
            // Get the validation messages for the specified field
            $messages = $formRequest->messages();
        }


        // Create a validator instance for the specified field
        $validator = Validator::make([$fieldName => $value], $tempRules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();

            $result = ['success' => false, 'errors' => $errors];
        } else {
            $result = ['success' => true];
        }

        // return response
        return $result;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function jpVerifyAccount($token)
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
                $user = User::where('id', $verifyUser->user_id)->first();
                Auth::login($user);
                return redirect()->route('jp-dashboard')->with('message', "YO");
            } else {
                $message = "Your e-mail is already verified. You can now login.";
                $user = User::where('id', $verifyUser->user_id)->first();
                Auth::login($user);
                return redirect()->route('jp-dashboard')->with('message', "YO");
            }
        }
        // dd($message);

        return redirect()->route('jp-registration-page')->with('message', $message);
    }

    public function jpSignin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Please Enter Your Email',
            'password.required' => 'Please Enter Your password',
        ]);

        // dd($request);

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
                // $token = JWTAuth::attempt($credentials);
                // Log::debug($token);

                $userType = auth()->user()->user_type;

                if ($userType == 1) {
                    return redirect()->route('jp-dashboard')->with('message', "YO");
                }

                // return $this->createNewToken($token);
            }
            return response()->json(['success' => false, 'message' => 'Login details are not valid'], 401);
        } catch (JWTException $e) {
            // Log::error($e);
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Could not create token'], 500);
        }
    }

    public function jpDetails()
    {
        return response()->json([
            'success' => true,
            'user' => Auth::user()
        ]);
    }

    public function jpDashboard()
    {
        if (Auth::check()) {
            return view('v1.careepick.dashboard.job-seeker.dashboard');
        }

        return redirect()->route("signin-page")->withSuccess('You are not allowed to access');
    }

    public function jpSignOut()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route("home");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data, int $userType)
    {
        try {
            $user = null;

            DB::transaction(function () use ($data, $userType) {
                // First query: Create a new user
                $this->user = Company::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone_no' => $data['phone_no'],
                    'password' => Hash::make($data['password']),
                    'user_type' => $userType
                ]);

                // Second query: Create a new job seeker
                JobSeeker::create([
                    'user_id' => $this->user->id,
                    'jobseeker_name' => $data['name'],
                    'jobseeker_mail' => $data['email'],
                    'jobseeker_password' => Hash::make($data['password']),
                    'jobseeker_phone_no_1' => $data['phone_no'],
                ]);
            });

            // Both queries were successful
            // Commit the transaction
            DB::commit();

            return $this->user;
        } catch (\Exception $e) {
            // Something went wrong
            // Roll back the transaction
            DB::rollBack();
            Log::error($e);
        }
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
            // 'expires_in' => auth('api')->factory()->getTTL(), // get the token expiration time from config/jwt.php
            'user' => auth()->user()
        ]);
    }
}
