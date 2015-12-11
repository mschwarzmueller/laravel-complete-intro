<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

// Before grouping, show it without
// Explain what closures are
// Explain named and unnamed routes and how to use them (route() vs. url())

Route::group(['prefix' => 'do'], function () {
    Route::get('greet', function () {
        return view('greet');
    });

    Route::get('hug/{name?}', function ($name = null) {
        return view('hug', ['name' => $name]);
    })->name('hug');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        if (isset($request['action']) && isset($request['name'])) {
            if (strlen($request['name']) > 0) {
                return view('nice', ['action' => $request['action'], 'name' => $request['name']]);
            }
            if (View::exists($request['action'])) {
                return view($request['action']);
            }
        }
        return redirect()->back();
    })->name('custom_action');
});
