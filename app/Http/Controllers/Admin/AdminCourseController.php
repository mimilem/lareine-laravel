<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCourseController extends Controller
{
    public function add_course()
    {
        return view('admin.courses.add');
    }
}
