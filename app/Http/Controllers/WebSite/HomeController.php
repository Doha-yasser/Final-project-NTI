<?php

namespace App\Http\Controllers\WebSite;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $latestCourses=Course::latest()->take(6)->get();
        return view('website.home.home',compact('latestCourses'));
    }
}
