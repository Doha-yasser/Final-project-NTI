<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(session()->get('user')->id);
        $enrolledCorses = $user->enrollments()->count();
        $mycourses=$user->instructorCourses()->count();
        $storage=$user->enrollmentCourses()->count();
        return view('website.dashboard.home', compact('enrolledCorses',"mycourses","storage"));
    }

}
