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

Route::get('/', [
    'uses' => 'NiceActionController@getHome',
    'as' => 'home'
]);

Route::delete('actions', [
   'uses' => 'NiceActionController@deleteActions',
    'as' => 'delete'
]);

// Before grouping, show it without
// Explain what closures are
// Explain named and unnamed routes and how to use them (route() vs. url())

Route::group(['prefix' => 'do'], function () {

    Route::get('/{action}', [
        'uses' => 'NiceActionController@getAction',
        'as' => 'action'
    ]);

//    Route::get('greet', [
//        'uses' => 'NiceActionController@getGreet',
//        'as' => 'greet'
//    ]);
//
//    Route::get('hug/{name?}', [
//        'uses' => 'NiceActionController@getHug',
//        'as' => 'hug'
//    ]);
//
//    Route::get('wave', [
//        'uses' => 'NiceActionController@getWave',
//        'as' => 'wave'
//    ]);

    Route::post('/', [
        'uses' => 'NiceActionController@postDoCustomAction',
        'as' => 'custom_action'
    ]);
});
