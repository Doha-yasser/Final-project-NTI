<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Course;
use App\Http\Traits\MediaTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    use MediaTrait;
    public function index()
    {
        $user = User::find(session()->get('user')->id);
        if (!$user) {
            return redirect()->route('login.view');
        }
        $courses = $user->instructorCourses()
            ->with(['instructor', 'students'])
            ->paginate(6);
        return view('website/dashboard/mycourses', compact('courses'));
    }
    public function create()
    {
        return view('website/dashboard/course/create');
    }
    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['instructor_id'] = session()->get('user')->id;
        $data['image'] = $this->uploadFile('courses/images', $request ,'image');
        $data['video'] = $this->uploadFile('courses/videos', $request ,'video');
        Course::create($data);
        return redirect()->route('mycourses.index')->with('success', __("site.added_successfully"));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('website/dashboard/course/edit', compact('course'));
    }
    public function update(CourseRequest $request, Course $course)
    {
        $data = $request->all();
        $data['image'] = $this->editFile($request, $course, 'courses/images', 'image');
        $data['video'] = $this->editFile($request, $course, 'courses/videos' ,'video');
        $course->update($data);
        return redirect()->route('mycourses.index')->with('success', __("site.updated_successfully"));
    }
    public function show(Course $course){
        return view('website/course', compact('course'));
    }
    public function destroy(Course $course)
    {
        $this->deleteFile($course->image);
        $this->deleteFile($course->video);
        $course->delete();
        return redirect()->route('mycourses.index')->with('success', __("site.deleted_successfully"));
    }
    public function storage(){
        $user = User::find(session()->get('user')->id);
        $courses = $user->enrollmentCourses()->paginate(6);
        return view('website/dashboard/storage', compact('courses'));
    }
}
