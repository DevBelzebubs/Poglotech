<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $messageBody;

    public function __construct($name, $email, $messageBody){
        $this->name = $name;
        $this->email = $email;
        $this->messageBody = $messageBody;
    }
    public function build(){
        return $this->subject('Nuevo mensaje de contacto')
                    ->view('emails.contact');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
