<?php

namespace App\Http\Controllers;

use App\Events\SendMailEvent;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class ContactController extends Controller
{
    public function postSendMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required|max:2000|min:10'
        ]);

        $test = "Some data";
        Event::fire(new SendMailEvent($request['message']));

        return redirect()->route('home')->with(['success' => 'Mail sent!!']);
    }
}