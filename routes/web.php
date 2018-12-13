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

Route::get('/', function() {
    // $a = 1;
    // $b = 2;
    // $c = $a + $b;
    // return $c;
    return view('welcome');
});

Route::fallback(function(){
    return view('notfound');
});

Route::get('/about', function(){
    return "<h1>Hi! This is about page</h1>";
});

Route::match(['get','post'],'/foo', function(){
    // return redirect('test');
    return redirect('test');
});

Route::get('/test', function(){
    return "TEST";
});

Route::get('/blog','PostController@index');

Route::resource('post','PostController');