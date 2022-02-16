<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('events.index');
    }
}
