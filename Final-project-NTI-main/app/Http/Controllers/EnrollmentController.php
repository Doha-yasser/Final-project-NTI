<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    // Enroll a student in a course
    public function store(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);

        // Prevent duplicate enrollment
        if (Enrollment::where('course_id', $course->id)->where('user_id', Auth::id())->exists()) {
            return redirect()->back()->with('error', 'You are already enrolled in this course.');
        }

        // Prevent enrollment if max_students reached
        if ($course->enrollments()->count() >= $course->max_students) {
            return redirect()->back()->with('error', 'This course is already full.');
        }

        Enrollment::create([
            'course_id' => $course->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('courses.index')->with('success', 'You have been enrolled successfully.');
    }

    // Optional: allow students to unenroll
    public function destroy($courseId)
    {
        $enrollment = Enrollment::where('course_id', $courseId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $enrollment->delete();

        return redirect()->route('courses.index')->with('success', 'You have unenrolled from the course.');
    }
}
