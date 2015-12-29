<?php

namespace App\Listeners;
use App\Events\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactMessageConfirmation
{
    public function __construct()
    {
    }

    public function handle(ContactMessageSent $event)
    {
        $contact_message = $event->message;
        Mail::send('email.contact-message-confirmation', ['contact_message' => $contact_message], function ($m) use ($contact_message) {
            $m->from('info@laravel-udemy-course.com', 'Laravel Udemy Course');
            $m->to($contact_message->email, $contact_message->sender);
            $m->subject('We received your message');
        });
    }
}