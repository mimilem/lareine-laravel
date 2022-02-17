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
            'activity_name' => $this->data['activity_name'],
            'name' => $this->data['name'],
            'code' => $this->data['code'],
            'activity_type' => $this->data['activity_type'],
        ])->from('test@lasouveraine.marketing', 'La Souveraine')->subject('Confirmation de votre souscription');
    }
}
