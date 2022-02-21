<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminForumController extends Controller
{
    public function index()
    {
        return view('admin.forums.index');
    }

    public function schedule_forum_step_one()
    {
        return view('admin.forums.step-one');
    }

    public function schedule_forum_step_two()
    {
        return view('admin.forums.step-two');
    }

    public function schedule_forum_step_three()
    {
        return view('admin.forums.step-three');
    }
}
