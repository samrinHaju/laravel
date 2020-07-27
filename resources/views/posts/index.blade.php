@extends('layout')
@section('content1')
    @foreach($posts as $post)
        <p>
            <h3>
                <a href="{{route('posts.show',['post'=> $post->id]) }}">{{ $post->title}}</a>
            </h3>
            <a href="{{ route ('posts.edit',['post'=> $post->id]) }}">Edit</a>
        </p>
    @endforeach
@endsection('content1')