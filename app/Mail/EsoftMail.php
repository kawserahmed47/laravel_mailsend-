<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EsoftMail extends Mailable 
{use Queueable, SerializesModels;
    public $details, $subject;
    /**
     * Create a new message instance.
     *
     *
     */
    public function __construct($details,$subject)
    {
        //
        $this->details= $details;
        $this->subject= $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
         return $this->subject($this->subject)
                     ->view('emails.eSoftMail');
    }
}
