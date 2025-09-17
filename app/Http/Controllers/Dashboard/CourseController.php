<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $user=User::find(session()->get('user')->id);
        if(!$user){
            return redirect()->route('login.view');
        }
        $courses =$user->courses()->get();
        return view('website/dashboard/mycourses',compact('courses'));
    }
}
