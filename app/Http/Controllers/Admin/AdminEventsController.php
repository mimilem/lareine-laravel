<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Http\Requests\admin\EventPostRequest;
use Illuminate\Support\Str;

class AdminEventsController extends Controller
{
    public function index()
    {
        $events = Activity::all()->where('activity_type', '!=', 'COURSE')->take(5);

        return view('admin.events.index', [
            'events' => $events
        ]);
        
    }

    public function add_event(EventPostRequest $request)
    {
        if ($request->method() == 'POST') {

            $data = $request->validated();
            $data['token'] = Str::uuid();
            $data['picture'] = $request->file('picture')->store('events');
            Activity::create($data);
        }
        return redirect()->route('all_events');
    }
}
