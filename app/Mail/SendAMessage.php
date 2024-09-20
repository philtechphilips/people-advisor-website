<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendAMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $services;
    public $messages;

    public function __construct($name, $email, $services, $messages)
    {
        $this->name = $name;
        $this->email = $email;
        $this->services = $services;
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'))
                    ->subject('Advisory request from ' . $this->name)
                    ->view('mails.send-a-message');
    }
}