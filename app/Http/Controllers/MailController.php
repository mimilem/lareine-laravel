<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class MailController extends Controller
{
    /**
     * @return $this
     */
    public function index($recipient)
    {
        Mail::to($recipient)->send(new NotifyMail([
            'name' => 'Emmanuel Makabu',
            'course_name' => 'Marketing Digital',
            'code' => '5fdfdgg'
        ]));
    }
}