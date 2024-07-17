<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('frontend.mail.enquiry-home-mail')
        ->from('rahulkumarmaurya464@gmail.com', 'Dr. Shilpi Reddy') // Sender's email and name
        ->subject('Book An Appointment With Dr. K. Shilpi Reddy');
    }
}


