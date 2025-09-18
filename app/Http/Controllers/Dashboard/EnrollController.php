<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(session()->get('user')->id);
        $enrollments = $user->enrollments;
        return view('website/dashboard/enrollments', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = Course::find($request->course_id);
        $user = User::find(session()->get('user')->id);
        if(!$user){
            return redirect()->route('login.view');
        }elseif (!$course) {
            return back()->with('error', __("site.not_found"));
        }
        if ($user->enrollments()->where('course_id', $request->course_id)->exists()) {
            return back()->with('error', __("site.already_enrolled"));
        } else if ($course->isFull) {
            return back()->with('error', __("site.full"));
        }
        $course->students()->attach($user->id);
        return back()->with('success', __("site.added_successfully"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::where('user_id', session()->get('user')->id)->where('course_id', $id)->delete();
        return back()->with('success', __("site.deleted_successfully"));
    }
}
