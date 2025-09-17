<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class auth_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('user')) {
            if ($request->routeIs('regist', 'user.store', 'user.login', 'doLogin', 'checkMail', 'reset' , 'index')) {
                return back();
            }
        }
        return $next($request);
    }
}
