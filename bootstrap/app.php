<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\LangMiddleware;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::name('admin.')
                ->middleware(['web'])
                ->prefix('admin')
                ->group(__DIR__ . '/../routes/admin.php');
        }
    )
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('otp:clean')->daily();
    })
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'login_middleware' => \App\Http\Middleware\login_middleware::class,
            "check.instructor" => \App\Http\Middleware\InstructorMiddleware::class,
            "lang" => LangMiddleware::class,
            "otp"=>\App\Http\Middleware\EnsureEmailInSession::class,
            'otp_verified' => \App\Http\Middleware\EnsureOtpVerified::class,
            'auth_middleware' => \App\Http\Middleware\auth_middleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
