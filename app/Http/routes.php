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

Route::get('/admin/dashboard', [
   'uses' => 'AdminController@getDashboard',
    'as' => 'admin.dashboard'
]);

Route::post('/admin/login', [
   'uses' => 'AdminController@postLogin',
    'as' => 'login'
]);

Route::get('/admin/logout', [
   'uses' => 'AdminController@getLogout',
    'as' => 'logout'
]);
