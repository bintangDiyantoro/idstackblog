<?php
use App\Post; //to use eloquent model
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

Route::get('/insert/{num}/{uid}', function($num,$uid){
    // DB::insert('INSERT INTO posts (title, body, user_id) VALUES (?,?,?)', ['learning PHP using Laravel', 'Laravel is the best PHP framework on Earth', 1]);

    $data = [
        'title' => $num.' post',
        'body' => 'content for the '.$num.' post',
        'user_id' => $uid
    ];

    DB::table('posts')->insert($data);
    echo "<script>
    alert('Data successfully added!');
    </script>";
});

Route::get('/read', function(){
    // $query = DB::select('SELECT * FROM posts WHERE user_id = ?', [1]);
    // $query = DB::select('SELECT * FROM posts');
    // $query = DB::table('posts')->select('title','body')->where('id',1)->get(); //get() for display array data type
    $query = DB::table('posts')->first(); //first() for object data type display, but but only show the first data
    echo "<pre>";
    return var_dump($query);
    echo "</pre>";
});

Route::get('/update/{id}', function($id){
    // $updated = DB::update('UPDATE posts SET title = "Second post" WHERE id = ?', [$id]);
    // return $updated;
    $data = [
        'title' => 'Third post',
        'body' => 'content for third post',
        'user_id' => 3
    ];

    $updated = DB::table('posts')->where('id', $id)->update($data);

    if($updated){
        echo "<script>
        alert('Data successfully updated!');
        </script>";
    }
    else{
        echo "<script>
        alert('Data not updated!');
        </script>";
    }
});

Route::get('/delete/{uid}', function($uid){
    // $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [$id]);
    $deleted = DB::table('posts')->where('user_id', $uid)->delete();
    // return $deleted;
    if($deleted){
        echo "<script>
        alert('Data successfully deleted!');
        </script>";
    }
    else{
        echo "<script>
        alert('Data not deleted!');
        </script>";
    }
});
//-----------------------------------ELOQUENT-----------------------------------
Route::get('/posts', function(){
    $posts = Post::all();
    return $posts;
    // echo $posts;
});

Route::get('/find/{id}', function($id){
    $posts = Post::find($id);
    return $posts;
});

Route::get('/findwhere/{uid}/{sum}', function($uid,$sum){
    $result = Post::where('user_id', $uid)->orderby('id', 'asc')->take($sum)->get();
    return $result;
});

Route::get('/create/{uid}', function($uid){
    $post = new Post();
    $post->title = 'Another Post';
    $post->body = 'Content of another body';
    $post->user_id = $uid;
    $post->save();
});

Route::get('/createpost/{uid}', function($uid){
    $post = Post::create(['title' => 'title example', 'body' => 'the example of the body', 'user_id' => $uid]);
    return $post;
});

Route::get('/updatepost/{id}/{uid}', function($id,$uid){
    Post::find($id)->update(['title' => 'update title', 'body' => 'the example of updated body', 'user_id' => $uid]);
});

Route::get('/deletepost/{id}', function($id){
    // Post::destroy([$id,$id2]);
    // Post::where('user_id', $uid)->delete();
    Post::find($id)->delete();
});