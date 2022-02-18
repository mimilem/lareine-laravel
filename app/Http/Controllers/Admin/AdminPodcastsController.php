<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminPodcastsController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all()->where('status', 'active');
        return view('admin.podcasts.index', [
            'podcasts' => $podcasts
        ]);
    }

    public function add(Request $request)
    {
        // return $request->input();
        if ($request->method() == 'POST') {
            Podcast::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'picture' => $request->file('picture')->store('podcasts'),
                'file' => "$request->file('file')->store('podcasts')",
                // 'file' => $request->file('file')->store('podcasts'),
                'token' => Str::uuid(),
            ]);
        }

        return redirect()->route('all_podcasts');
    }
}
