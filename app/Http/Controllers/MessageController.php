<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->input();

        Message::create($data);

        return redirect()->route('contact')->with('success', 'Votre message a été correctement envoyé');
    }
}
