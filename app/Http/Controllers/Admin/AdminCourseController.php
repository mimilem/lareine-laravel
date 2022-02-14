<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CoursePostRequest;
use App\Models\Course;
use Illuminate\Support\Str;

class AdminCourseController extends Controller
{
    public function index()
    {
        $courses = Course::all()->take(5);

        return view('admin.courses.index', [
            'courses' => $courses
        ]);
    }

    public function add_course()
    {
        return view('admin.courses.add');
    }

    public function register_course(CoursePostRequest $request)
    {

        if ($request->method() == 'POST') {

            $data = $request->validated();
            $data['token'] = Str::uuid();
            $data['picture'] = $request->file('picture')->store('courses');
            Course::create($data);
        }
        return redirect()->route('all_courses');
    }
}
