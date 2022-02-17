<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Facilitator;
use App\Models\Subscribe;

class AdminController extends Controller
{
    public function index()
    {
        $courses = Activity::all()->where('activity_type', 'COURSE')->take(5);
        $total_courses = Activity::all()->where('activity_type', 'COURSE')->count();
        $total_facilitators = Facilitator::all()->count();
        $total_subscribes = Subscribe::all()->count();

        return view("admin.index", [
            'courses' => $courses,
            'total_courses' => $total_courses,
            'total_facilitators' => $total_facilitators,
            'total_subscribes' => $total_subscribes
        ]);
    }
}
