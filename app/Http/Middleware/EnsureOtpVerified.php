<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureOtpVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->session()->has('otp_verified') || $request->session()->get('otp_verified') !== true) {
            return redirect()->route('forgetpassword.view')
                ->withErrors(['error' => 'You must verify OTP first.']);
        }

        return $next($request);
    }
}
