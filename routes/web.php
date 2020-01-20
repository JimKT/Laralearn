<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// This is a global route, sending to the default blade template
Route::get('/', function() {
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

// This is a template returing a test blade template, with a variable in tow
Route::get('/test', function(){
    return view('test', [
        'name' => request('name')
    ]);
});