<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view("courses.courses", $data = [
            'courses' => $data
        ]);
    }

    public function course_details($token)
    {
        $data = DB::table('courses')->where('token', '=', $token)->get()->toArray();

        return view("courses.courses-details", [
            'course' => $data[0]
        ]);
    }

    public function verify(Request $request)
    {
        $data = [
            "first_name" => $request->input("first_name"),
            "last_name" => $request->input("last_name"),
            "post_name" => $request->input("post_name"),
            "gender" => $request->input("gender"),
            "phone" => $request->input("phone"),
            "email" => $request->input("email"),
            "work" => $request->input("work"),
            "city" => $request->input("city"),
            "province" => $request->input("province"),
            "country" => $request->input("country"),
        ];
        return view("courses.info-verification", $data);
    }
}
