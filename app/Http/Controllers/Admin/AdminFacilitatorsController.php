<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facilitator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminFacilitatorsController extends Controller
{
    public function index()
    {
        $facilitators = User::all()->where('user_role', 'ROLE_FACILITATOR')->take(10);

        return view('admin.facilitators.index', [
            'facilitators' => $facilitators
        ]);
    }

    public function add_facilitator(Request $request)
    {
        if ($request->method() == 'POST') {
            User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'bio' => $request->input('bio'),
                'user_role' => 'ROLE_FACILITATOR',
                'picture' => $request->file('picture')->store('users')
            ]);
        }
        return redirect()->route('facilitators');
    }
}
