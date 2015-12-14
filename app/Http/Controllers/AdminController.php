<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getDashboard()
    {
        // Check if logged in
        if (!Auth::check()) {
            return redirect()->back()->with(['fail' => 'You have to be logged in to access this site!']);
        }
        return view('admin.dashboard');
    }

    public function postLogin(Request $request)
    {
        if (!isset($request['email']) || strlen($request['email']) === 0 || !isset($request['password']) || strlen($request['password']) === 0) {
            return redirect()->back()->with(['fail' => 'Please provide an email address as well as a password!']);
        }
        if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->back()->with(['fail' => 'You could not be logged in. Please check your login credentials!']);
        }

        return redirect()->route('admin.dashboard');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}