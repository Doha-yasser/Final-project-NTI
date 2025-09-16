<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('view', [UserController::class, 'view']);


Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/', [UserController::class, 'index'])->name('index');




Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);

    Route::middleware('login_middleware')->group(function () {
        Route::get('/regist', [UserController::class, 'register'])->name('regist');
        Route::post('/regist', [UserController::class, 'store'])->name('user.store');
        Route::get('/login', [UserController::class, 'login'])->name('user.login');
        Route::post('/login', [UserController::class, 'doLogin'])->name('doLogin');
    });


    Route::match(['get', 'post'], '/check-email', [UserController::class, 'checkMail'])->name('checkMail');
    Route::match(['get', 'post'], '/reset-password', [UserController::class, 'reset'])->name('rest');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

});




// page not found
Route::fallback(function () {
    return view('pageNotFound');
});