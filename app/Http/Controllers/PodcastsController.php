<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all()->where('status', 'active');

        return view('podcasts.index', [
            'podcasts' => $podcasts
        ]);
    }

    public function podcast_details($token)
    {
        $podcast = Podcast::all()->where('token', $token)->first();

        return view('podcasts.details', [
            'podcast' => $podcast
        ]);
    }
}
