<?php

namespace Ranjeet\MyContactPackage\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    
    public $message;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
       $this->markdown('contact.email')->with(['message' => $message]);
       $this->markdown('contact.email')->with(['message' => $message]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact.email')->with(['message' => $message]);
    }
}
