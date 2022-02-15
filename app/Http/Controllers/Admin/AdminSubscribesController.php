<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Subscribe;

class AdminSubscribesController extends Controller
{
    public function ticket_verifier()
    {
        return view('admin.subscribes.ticket-verifier');
    }

    public function verify(Request $request)
    {
        $code =  $request->input('code');
        $subscribe = Subscribe::where('code', $code)->first();
        $message = "";
        $state = "";

        if ($subscribe != null) {
            $message = sprintf('Ticket de réservation de %s, Pour la formation "%s"', $subscribe['first_name'].' '.$subscribe['last_name'] , $subscribe->course->title);
            $state = 'success';
        } else {
            $message = 'Ticket non valide';
            $state = 'error';
        }
        
        return redirect()->route('ticket_verifier')->with($state, $message);
    }
}
