<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user_name;
    public $user_email;
    public $user_message;

    public function __construct($user_name, $user_email, $user_message)
    {
        $this->user_name = $user_name;
        $this->user_email = $user_email;
        $this->user_message = $user_message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}