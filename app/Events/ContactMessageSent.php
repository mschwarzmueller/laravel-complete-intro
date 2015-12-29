<?php

namespace App\Events;

use App\ContactMessage;

class ContactMessageSent extends Event
{
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
    }
}