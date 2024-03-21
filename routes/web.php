<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\careepick\JobController;
use App\Http\Controllers\v1\careepick\ContactController;
use App\Http\Controllers\v1\careepick\EmployeeController;
use App\Http\Controllers\v1\careepick\EmployerController;
use App\Http\Controllers\v1\Ajax\ValidationDataController;
use App\Http\Controllers\v1\JobProvider\JobPostController;
use App\Http\Controllers\v1\employer\SocialLoginController;
use App\Http\Controllers\v1\JobSeeker\ResumeBuilderController;
use App\Http\Controllers\v1\JobSeeker\AuthController as JsAuthController;
use App\Http\Controllers\v1\JobProvider\AuthController as JpAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::post('/user-login', [AuthController::class, 'login'])->name('user.signin');
// Route::get('/signout', [AuthController::class, 'signOut'])->name('logout');
// Route::get('/auth', [AuthController::class, 'loginPage'])->name('loginPage');
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/validate', ValidationDataController::class)->name('ajaxValidationData');

Route::prefix('job-seeker')->group(function () {
    Route::controller(JsAuthController::class)->group(function () {
        Route::post('/signin', 'jsSignin')->name('js-signin');
        Route::get('/sign-page', 'jsSigninPage')->name('js-signin-page');
        Route::get('/registration-page', 'jsRegistrationPage')->name('js-registration-page');
        Route::post('/post-registration', 'jsPostRegistration')->name('js-register.post');
        Route::get('/account/verify/{token}', 'jsVerifyAccount')->name('js-user.verify');
        Route::get('/signout', 'jsSignOut')->name('js-signout');

        Route::middleware('auth')->group(function () {
            Route::middleware('is_verify_email')->group(function () {
                Route::prefix('/dashboard')->group(function () {
                    Route::get('/', 'jsDashboard')->name('js-dashboard');
                });
            });
        });
    });

    Route::middleware('auth')->group(function () {
        Route::middleware('is_verify_email')->group(function () {
            Route::controller(ResumeBuilderController::class)->group(function () {
                Route::get('/my-resume', 'myResumePage')->name('resume-builder-page');
                Route::get('/resume', 'showResume')->name('show-resume');
                Route::post('/education/fetch-values', 'fetchDegreeTitleByEducationLevel')->name('fetch-values');
                Route::post('/general-information/add', 'addGeneralInfo')->name('js-add-general-info');
                Route::post('/education/add', 'addEducation')->name('js-add-education');
                Route::post('/work-experience/add', 'addWorkExperience')->name('js-add-work-experience');
                Route::post('/certification/add', 'addCertification')->name('js-add-certification');
                Route::post('/publications/add', 'addPublications')->name('js-add-publications');
                Route::post('/langugaes/add', 'addLangugaes')->name('js-add-langugaes');
                Route::post('/skills/add', 'addSkills')->name('js-add-skills');
            });
        });
    });
});

Route::prefix('job-provider')->group(function () {
    Route::controller(JpAuthController::class)->group(function () {
        Route::post('/signin', 'jpSignin')->name('jp-signin');
        Route::get('/signin-page', 'jpSigninPage')->name('jp-signin-page');
        Route::get('/registration-page', 'jpRegistrationPage')->name('jp-registration-page');
        Route::post('/post-registration', 'jpPostRegistration')->name('jp-register.post');
        Route::post('/data/validate', 'jpValidation')->name('jp-validate-data');
        Route::get('/account/verify/{token}', 'jpVerifyAccount')->name('jp-user.verify');
        Route::get('/signout', 'jsSignOut')->name('jp-signout');

        Route::middleware('auth')->group(function () {
            Route::middleware('is_verify_email')->group(function () {
                Route::prefix('/dashboard')->group(function () {
                    Route::get('/', 'jpDashboard')->name('jp-dashboard');
                });
            });
        });
    });

    Route::middleware('auth')->group(function () {
        Route::middleware('is_verify_email')->group(function () {
            Route::controller(JobPostController::class)->group(function () {
                Route::get('/job-post', 'jobPostPage')->name('job-post-page');
            });
        });
    });
});

Route::get('/register-company', [EmployerController::class, 'createCompany'])->name('register-company');

// Route::controller(SocialLoginController::class)->group(function () {
//     Route::get('authorized/{platform}', 'redirectTo')->name('social.auth.redirectTo');
//     Route::get('authorized/{platform}/callback', 'handleCallback')->name('social.auth.handleCallback');
// });

Route::get('/', function () {
    return view('v1.careepick.pages.common.home');
})->name("home");

Route::controller(EmployerController::class)->group(function () {
    Route::prefix('employer')->group(function () {
        Route::get('/', 'employer')->name('employer');
        Route::get('/list', 'employerList')->name('employer-list');
        Route::get('/detail', 'employerDetail')->name('employer-detail');
        Route::get('/create-company', 'createCompany')->name('create-company');
        Route::get('/manage-resume', 'manageResume')->name('manage-resume');
        Route::get('/create-job', 'createJob')->name('create-job');
        Route::get('/resume-detail', 'resumeDetail')->name('resume-detail');
    });
});

Route::controller(EmployeeController::class)->group(function () {
    Route::prefix('employee')->group(function () {
        Route::get('/', 'employee')->name('employee');
    });
});

Route::controller(JobController::class)->group(function () {
    Route::prefix('job')->group(function () {
        Route::get('/', 'job')->name('browse-job');
        Route::get('/manage-job', 'manageJob')->name('manage-job');
        Route::get('/job-detail', 'jobDetail')->name('job-detail');
        Route::get('/category', 'browseCategory')->name('browse-category');
    });
});

// Route::controller(ContactController::class)->group(function () {
//     Route::prefix('contact')->group(function () {
//         Route::get('/', 'contact')->name('contact');
//     });
// });

// Route::controller(AuthController::class)->group(function () {
//     Route::prefix('auth')->group(function () {
//         Route::get('/signin', 'signin')->name('signin');
//         Route::get('/signup', 'signup')->name('signup');
//         Route::get('/signout', 'signout')->name('signout');
//     });
// });

Route::get('404', function () {
    return view('careepick.pages.404');
})->name('404');
