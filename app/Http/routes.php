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

/* Frontend routes */
/* Blog routes */
Route::get('/', function () {
    return view('frontend.blog.index');
})->name('home');

Route::get('/blog', function() {
   return view('frontend.blog.index');
})->name('blog.index');

Route::get('/blog/{post_id}', function() {

});

/* Other routes */
Route::get('/contact', function() {

});

Route::post('/contact/sendmail', function() {

});

/* Backend routes */
Route::get('/admin', function() {
    // Dashboard or login screen redirect
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/login', function() {

});

Route::get('/admin/logout', function() {

});

/* Blog routes */
Route::get('/admin/blog/posts', function() {
    return view('admin.blog.index');
})->name('admin.blog.index');

Route::get('/admin/blog/categories', function() {
    return view('admin.blog.categories');
})->name('admin.blog.categories');

Route::get('/admin/blog/post/{post_id}', function() {

});

Route::get('/admin/blog/posts/create', function() {
    return view('admin.blog.create_post');
})->name('admin.blog.create_post');

Route::get('/admin/blog/categories/create', function() {

});

Route::get('/admin/blog/post/{post_id}/edit', function() {

});

Route::get('/admin/blog/categories/{category_id}/edit', function() {

});

Route::post('/admin/blog/posts/create', function() {

});

Route::post('/admin/blog/categories/create', function() {

});

Route::post('/admin/blog/posts/update', function() {

});

Route::post('/admin/blog/categories/update', function() {

});

Route::get('/admin/blog/post/{post_id}/delete', function() {

});

Route::get('/admin/blog/category/{category_id}/delete', function() {

});

/* Other routes */
Route::get('/admin/contact/messages', function() {
    return view('admin.other.contact_messages');
})->name('admin.messages.index');

Route::get('/admin/contact/message/{message_id}/delete', function() {

});