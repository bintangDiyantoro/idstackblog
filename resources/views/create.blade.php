@extends('layout.app')

@section('title')
Create Post
@endsection

@section('body')
<h1>Create Post</h1>
    <form action="{{ route('post.store')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Title" autofocus autocomplete="off"><br><br>
        <textarea name="body" cols="30" rows="10" placeholder="Type the post content here..."></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
@endsection