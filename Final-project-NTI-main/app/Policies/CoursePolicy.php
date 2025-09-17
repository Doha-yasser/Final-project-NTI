<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function update(User $user, Course $course)
    {
        return $user->id === $course->instructor_id;
    }

    public function delete(User $user, Course $course)
    {
        return $user->id === $course->instructor_id;
    }

    public function viewStudents(User $user, Course $course)
    {
        // instructor can view students for their course
        return $user->id === $course->instructor_id;
    }
}
