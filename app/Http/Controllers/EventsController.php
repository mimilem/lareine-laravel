<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Forum;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index()
    {
        $data = Forum::all();

        return view('events.index', [
            'events' => $data
        ]);
    }

    public function event_details($token)
    {
        $data = DB::table('activities')->where('token', '=', $token)->get()->first();

        $other_events = Activity::all()
                            ->where('activity_type', '!=', 'COURSE')
                            ->where('token', '!=', $token)->take(6);

        return view('events.event-details', [
            'event' => $data,
            'other_events' => $other_events
        ]);
    }
}
