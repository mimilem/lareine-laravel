<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $data = Course::all()->take(3);
        
        return view('home', $data = [
            'courses' => $data
        ]);
    }
}
