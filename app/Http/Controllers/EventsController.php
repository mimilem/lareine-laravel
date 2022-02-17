<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class EventsController extends Controller
{
    public function index()
    {
        $data = Activity::all()->where('activity_type', '!=','COURSE');

        return view('events.index', [
            'events' => $data
        ]);
    }

    public function event_details($id)
    {
        return view('events.event-details');
    }
}
