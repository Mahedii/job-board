<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\careepick\JobController;
use App\Http\Controllers\v1\careepick\AuthController;
use App\Http\Controllers\v1\careepick\ContactController;
use App\Http\Controllers\v1\careepick\EmployeeController;
use App\Http\Controllers\v1\careepick\EmployerController;
use App\Http\Controllers\v1\employer\SocialLoginController;

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

Route::post('/user-login', [AuthController::class, 'login'])->name('user.signin');
Route::get('/signout', [AuthController::class, 'signOut'])->name('logout');
Route::get('/auth', [AuthController::class, 'loginPage'])->name('loginPage');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/register-company', [EmployerController::class, 'createCompany'])->name('register-company');

Route::controller(SocialLoginController::class)->group(function () {
    Route::get('authorized/{platform}', 'redirectTo')->name('social.auth.redirectTo');
    Route::get('authorized/{platform}/callback', 'handleCallback')->name('social.auth.handleCallback');
});

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

Route::controller(ContactController::class)->group(function () {
    Route::prefix('contact')->group(function () {
        Route::get('/', 'contact')->name('contact');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/signin', 'signin')->name('signin');
        Route::get('/signup', 'signup')->name('signup');
        Route::get('/signout', 'signout')->name('signout');
    });
});

Route::get('404', function () {
    return view('careepick.pages.404');
})->name('404');
