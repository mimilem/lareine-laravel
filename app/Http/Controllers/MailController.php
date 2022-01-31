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
    public function index(string $recipient)
    {
        Mail::to($recipient)->send(new NotifyMail());
    }
}