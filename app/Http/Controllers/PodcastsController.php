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
}
