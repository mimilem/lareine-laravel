<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.subscribe-confirmation', [
            'course_name' => $this->data['course_name'],
            'name' => $this->data['name'],
            'code' => $this->data['code'],
        ])->from('test@lasouveraine.marketing', 'La Souveraine')->subject('Confirmation de votre souscription');
    }
}
