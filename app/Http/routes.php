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
})->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/dashboard', [
        'uses' => 'AdminController@getDashboard',
        'as' => 'admin.dashboard'
    ]);

    Route::get('/admin/posts', [
        'uses' => 'AdminController@getPostsIndex',
        'as' => 'admin.posts'
    ]);

    Route::get('/admin/contact', [
        'uses' => 'AdminController@getContactIndex',
        'as' => 'admin.contact'
    ]);
});


Route::get('/guestonly', [
   'middleware' => 'guest', 'as' => 'guest', function() {
        return view('guest');
    }
]);

Route::post('/admin/login', [
   'uses' => 'AdminController@postLogin',
    'as' => 'login'
]);

Route::get('/admin/logout', [
   'uses' => 'AdminController@getLogout',
    'as' => 'logout'
]);

/* Send mail */

Route::post('/mail', [
   'uses' => 'ContactController@postSendMail',
    'as' => 'mail.send'
]);
