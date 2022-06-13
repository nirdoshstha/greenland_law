<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
        public $contact_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_data)
    {
        $this->contact_data = $contact_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        // $from_name = "Greenland Law Firm";
        // $from_email = "nirdoshsresta@gmail.com";
        // $subject = "Greenland Law Firm: You have a new query";
        return $this->subject('Greenland Law Firm: You have a new query')
                    ->from($this->contact_data['email'])
                    ->view('emails.contact')
                    ->with('contact_data',$this->contact_data);
    }
}
