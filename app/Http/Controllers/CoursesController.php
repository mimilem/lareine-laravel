<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function index()
    {
        return view("courses.courses");
    }

    public function verify()
    {
        return view("courses.info-verification");
    }
}
