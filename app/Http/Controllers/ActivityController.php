<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    public function subscribe(Request $request)
    {
        $activity = Activity::all()->where('token', '=', $request->input('token'))->first();
        $data = $request->input();
        $data['activity_type'] = $activity->activity_type;
        $data['activity_id'] = $activity->id;
        $data['code'] = Str::random(8);

        Subscribe::create($data);

        Mail::to($data['email'])->send(new NotifyMail([
            'name' => $data['first_name'].' '.$data['last_name'],
            'activity_name' => $activity->title,
            'code' => $data['code'],
            'activity_type' => $data['activity_type']
        ]));
        
        return redirect()->route('messages')->with('success', 'Votre souscription a réussie. Un mail de confirmation vous a été envoyé');
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
            "activity_type" => $request->input("activity_type"),
        ];
        return view("courses.info-verification", $data);
    }
}
