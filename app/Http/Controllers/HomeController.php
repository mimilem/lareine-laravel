<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        $data = Activity::all()->where('activity_type', 'COURSE')->take(3);
        
        return view('home', $data = [
            'courses' => $data
        ]);
    }
}
