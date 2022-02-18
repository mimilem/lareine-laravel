<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;

class AdminPodcastsController extends Controller
{
    public function index()
    {
        return view('admin.podcasts.index');
    }

    public function add(Request $request)
    {
        // return $request->input();
        if ($request->method() == 'POST') {
            Podcast::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'picture' => $request->file('picture')->store('podcasts'),
                'file' => $request->file('file')->store('podcasts')
            ]);
        }

        return redirect()->route('all_podcasts');
    }
}
