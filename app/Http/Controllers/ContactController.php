<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function postSendMail(Request $request, Application $app)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required|max:2000|min:10'
        ]);

        $mail = $app->make('mailer');
        $test = "Some data";

        // Send mail here
        // Alternative: Mail::send...
        $mail->send('email.standard', ['test' => $test], function($message) {
            $message->from('me@mymail.com', 'Max');
            $message->to('test@test.com', 'Test');
            $message->subject('Testmail');
        });

        return redirect()->route('home')->with(['success' => 'Mail sent!!']);
    }
}