@extends('layout.app')

@section('title')
    Post Page
@stop

$section('body')
<h1>Post Page</h1>
    @if(count($posts)!=0)
    <ul>
        @foreach($posts as $post)
        <a href="{{route('post.show', $post['id'])}}"><li>{{$post['title']}}</li></a>
        @endforeach
    </ul>
    @else
    <p>No Data</p>
    @endif
@stop