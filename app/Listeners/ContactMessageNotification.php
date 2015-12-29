<?php

namespace App\Listeners;
use App\Events\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactMessageNotification
{
    public function __construct()
    {
    }

    public function handle(ContactMessageSent $event)
    {
        $contact_message = $event->message;
        Mail::send('email.contact-message-notification', ['contact_message' => $contact_message], function ($m) use ($contact_message) {
            $m->from('info@laravel-udemy-course.com', 'Laravel Udemy Course');
            $m->to('admin@laravel-udemy-course.com', 'Laravel Udemy Course');
            $m->subject('New contact message from: ' . $contact_message->email);
        });
    }
}