<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function sign_in(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->put('email', $request->input('email'));
            return redirect()->route('dashboard');
        }
        return redirect()->route('admin_login');
    }

    public function logout()
    {
        if (session()->has('email')) {
            session()->pull('email');
        }

        return redirect()->route('admin_login');
    }
}
