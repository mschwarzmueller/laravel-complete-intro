<?php

namespace App\Events;

class SendMailEvent extends Event
{
    public function __construct($data)
    {
        // Now you could do more stuff here...fetch data from the db and so on
        $this->mail_data = $data;
    }
}