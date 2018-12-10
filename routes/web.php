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

// Route::get('blog', function(){
//     $posts = [
//         ['id'=> 1, 'title'=>'Post 1', 'body'=>'body in 1st post'],
//         ['id'=> 2, 'title'=>'Post 2', 'body'=>'body in 2nd post'],
//         ['id'=> 3, 'title'=>'Post 3', 'body'=>'body in 3rd post'],
//         ['id'=> 4, 'title'=>'Post 4', 'body'=>'body in 4th post']
//     ];
//     ?> 
    <!-- <ul> -->
     <?php 
    //  foreach ($posts as $post): ?>
         <!-- <li> -->
             <!-- <a href="/post/<?php 
            //  echo $post['id'];?>"><?php 
            //  echo $post['title']; ?></a> -->
             <!-- <a href="<?php
            // echo route('post.detail',$post['id']);?>"><?php
            // echo $post['title']; ?></a> -->
         <!-- </li> -->
     <?php 
    // endforeach; ?>
     <!-- </ul> -->
     <?php
// });

Route::get('/blog','PostController@index');
// Route::get('/post/create','PostController@create');
// Route::post('/post/store','PostController@store');

// // Route::get('post/{id}', function($id){
// Route::get('/post/{id}', ['as' => 'post.detail', function($id){
//     echo $id; ?></br><?php
//     echo "Body post in ID ". $id;
// }]);

Route::resource('post','PostController');