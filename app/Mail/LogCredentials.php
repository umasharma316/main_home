<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LogCredentials extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        //
         $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.login_credentials')
                    ->from('helpdesk@e-yantra.org','e-Yantra IITB')
                    ->replyTo('school@e-yantra.org','e-Yantra IITB')
                    ->subject('IIT Bombay, e-Yantra: Grand Finale Virtual Museum Competition - Registration Confirmed');
    }
}
