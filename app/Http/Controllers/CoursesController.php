<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view("courses.courses");
    }

    public function course_details()
    {
        return view("courses.courses-details");
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
