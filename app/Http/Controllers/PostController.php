<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            ['id'=> 1, 'title'=>'Post 1', 'body'=>'body in 1st post'],
            ['id'=> 2, 'title'=>'Post 2', 'body'=>'body in 2nd post'],
            ['id'=> 3, 'title'=>'Post 3', 'body'=>'body in 3rd post'],
            ['id'=> 4, 'title'=>'Post 4', 'body'=>'body in 4th post']
        ];
        ?> <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <!-- <a href="/post/<?= $post['id'];?>"><?= $post['title']; ?></a> -->
                <a href="<?= route('post.show',$post['id']);?>"><?= $post['title']; ?></a>
            </li>
        <?php endforeach; ?>
        </ul><?php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "This is show controller by ID = ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "This is Edit controller by ID = ".$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
