<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Facilitator;

class AdminController extends Controller
{
    public function index()
    {
        $courses = Course::all()->take(5);
        $total_courses = Course::all()->count();
        $total_facilitators = Facilitator::all()->count();

        return view("admin.index", [
            'courses' => $courses,
            'total_courses' => $total_courses,
            'total_facilitators' => $total_facilitators
        ]);
    }
}
