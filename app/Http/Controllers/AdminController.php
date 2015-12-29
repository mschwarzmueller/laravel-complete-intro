<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $contact_messages = ContactMessage::orderBy('created_at', 'desc')->take(3)->get();

        return view('admin.index', ['posts' => $posts, 'contact_messages' => $contact_messages]);
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->back()->with(['fail' => 'Could not log you in with the provided credentials.']);
        }
        return redirect()->route('admin.index');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('blog.index');
    }
}