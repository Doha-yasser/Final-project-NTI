<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::find(session()->get('user')->id);
        $course = Course::find($request->route('course'));
        if (!$user || !$course) {
            return redirect()->route('home')->with('error', __("site.not_found"));
        }

        if ($user->enrollments()->where('course_id', $course->id)->exists() || $course->instructor_id == $user->id) {
            return $next($request);
        }

        return  redirect()->route('home')->with('error', __("site.not_enrolled"));
    }
}
