<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegisterMail1 extends Mailable
{
    use Queueable, SerializesModels;
    public function build()
    {
        return $this->view('email.registerMail1')->subject('Your Hall request is Accepted')->from('rasystemdoc@gmail.com','Resource-Allocation');
    }
}
