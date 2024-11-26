<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class NeedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $userDescription;
    public $userCategory;
    public $userMessage;

    public function __construct($name, $description, $category, $message)
    {
        $this->userName = $name;
        $this->userDescription = $description;
        
        // Handle category array conversion
        if (is_array($category)) {
            $this->userCategory = implode(', ', $category);
        } else {
            $this->userCategory = $category;
        }
        
        $this->userMessage = $message;
    }

    public function build()
    {
        return $this->subject('New Need Notification')
                    ->view('emails.need_notification');
    }
}