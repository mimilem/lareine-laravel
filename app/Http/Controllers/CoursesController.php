<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use App\Models\Subscribe;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Activity::all()->where('activity_type', 'COURSE');
        return view("courses.courses", $data = [
            'courses' => $data
        ]);
    }

    public function course_details($token)
    {
        $data = DB::table('activities')->where('token', '=', $token)->get()->toArray();

        return view("courses.courses-details", [
            'course' => $data[0]
        ]);
    }

}
