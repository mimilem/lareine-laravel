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
        $data = Activity::all();
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
            "token" => $request->input("token"),
        ];
        return view("courses.info-verification", $data);
    }

    public function subscribe(Request $request)
    {
        $course = DB::table('activities')->where('token', '=', $request->input('token'))->get();
        $data = $request->input();
        $data['activity_id'] = $course[0]->id;
        $data['code'] = Str::random(8);

        Subscribe::create($data);

        Mail::to($data['email'])->send(new NotifyMail([
            'name' => $data['first_name'].' '.$data['last_name'],
            'course_name' => $course[0]->title,
            'code' => $data['code']
        ]));
        
        return redirect()->route('messages')->with('success', 'Votre souscription a réussie. Un mail de confirmation vous a été envoyé');
    }
}
