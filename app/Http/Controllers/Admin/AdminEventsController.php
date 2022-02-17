<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Http\Requests\admin\EventPostRequest;

class AdminEventsController extends Controller
{
    public function index()
    {
        return view('admin.events.index');
    }

    public function add_event(EventPostRequest $request)
    {
        if ($request->method() == 'POST') {

            $data = $request->validated();
            $data['picture'] = $request->file('picture')->store('events');
            Activity::create($data);
        }
        return redirect()->route('all_events');
    }
}
