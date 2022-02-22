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

        // User::create([
        //     "first_name" => 'Admin',
        //     "last_name" => 'Admin',
        //     "user_role" => 'ROLE_ADMIN',
        //     "bio" => 'dfdgsgdsgsdgd' ,
        //     "email" => 'admin@lasouveraine.marketing',
        //     "password" => Hash::make('123456'),
        // ]);

        $data = Activity::all()->where('activity_type', 'COURSE')->take(3);
        
        return view('home', $data = [
            'courses' => $data
        ]);
    }
}
