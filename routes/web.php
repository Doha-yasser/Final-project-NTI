<?php

use App\Http\Controllers\Dashboard\EnrollController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\WebSite\AuthController;
use App\Http\Controllers\WebSite\HomeController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\WebSite\CourseController;
use App\Http\Controllers\Dashboard\CourseController as DashboardCourseController;


Route::group(['middleware' => ['auth_middleware']], function () {

    Route::get('/login', [AuthController::class, 'loginPage'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/signup', [AuthController::class, 'signupPage'])->name('signup.view');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::get('/forgetpassword', [AuthController::class, 'forgetpasswordPage'])->name('forgetpassword.view');
    Route::post('/forgetpassword', [AuthController::class, 'forgetpassword'])->name('forgetpassword');
    Route::get("/check-mail", [AuthController::class, 'checkOtpPage'])->name('checkMail.view')->middleware('otp');
    Route::post("/check-mail", [AuthController::class, 'sendOtp'])->name('sendOtp')->middleware('otp');
    Route::get("/reset-password", [AuthController::class, 'resetPasswordPage'])->name('resetPassword.view')->middleware('otp_verified');
    Route::post("/reset-password", [AuthController::class, 'resetPassword'])->name('resetPassword')->middleware('otp_verified');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('about', function () {
    return view('website/about');
})->name('about');
Route::get('studentcourese', function () {
    return view('website/studentcourese');
});


Route::group(['middleware' => ['login_middleware']], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/toggle/{id}', [WishListController::class, 'toggle'])->name('wishlists.toggle');
    Route::get('/dashboard', [DashboardHomeController::class, 'index'])->name('dashboard');
    Route::get('dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('dashboard/{id}/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('dashboard/mycourses', DashboardCourseController::class)->except('show');
    Route::get('dashboard/storage', [DashboardCourseController::class, 'storage'])->name('storage');
    Route::resource('dashboard/enrollments', EnrollController::class);
    Route::get("courses/{course}", [HomeController::class, 'show'])->name('courses.show')->middleware('course');
});













Route::get('enrollstudent', function () {
    return view('website/dashboard/enrollstudent');
});







Route::fallback(function () {
    return view('website/error');
});
