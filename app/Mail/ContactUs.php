<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

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
        if ($this->data['image'] != '') {
            return $this->from('contact@sunscooter.co','Sun Scooter App')
                ->view('email.contactus')
                ->attach($this->data['image']);
        } else {            
            return $this->from('contact@sunscooter.co','Sun Scooter App')
                ->view('email.contactus');
        }
        
    }
}
