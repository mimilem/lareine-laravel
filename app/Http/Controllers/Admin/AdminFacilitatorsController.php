<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Facilitator;
use App\Models\User;
use Illuminate\Http\Request;

class AdminFacilitatorsController extends Controller
{
    public function index()
    {
        $facilitators = Facilitator::all();
        $data = [];
        foreach ($facilitators as $f) {
             $data [] = [
                 'email' => $f->user->email,
                 'name' => $f->user->name,
                 'date' => $f->created_at,
             ];
        }
        return view('admin.facilitators.index', [
            'facilitators' => $data
        ]);
    }

    public function add_facilitator(Request $request)
    {
        if ($request->method() == 'POST') {
            $user = User::create([
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'password' => '123456',
            ]);

            Facilitator::create([
                'user_id' => $user->id
            ]);
            
        }
        return redirect()->route('facilitators');
    }
}
