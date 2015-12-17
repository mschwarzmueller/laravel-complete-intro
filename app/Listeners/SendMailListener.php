<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use Illuminate\Support\Facades\Mail;

class SendMailListener
{
    public function handle(SendMailEvent $event)
    {
        $mail_data = $event->mail_data;
        Mail::send('email.standard', ['test' => $mail_data], function ($message) {
            $message->from('me@mymail.com', 'Max');
            $message->to('test@test.com', 'Test');
            $message->subject('Testmail');
        });

    }
}