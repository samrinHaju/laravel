@extends('layout')
@section('content1')
    @foreach($posts as $post)
        <p>
            <h3>
                <a href="{{route('posts.show',['post'=> $post->id]) }}">{{ $post->title}}</a>
            </h3>
            <a href="{{ route ('posts.edit',['post'=> $post->id]) }}"  class="btn btn-primary">Edit</a>

            <form method="post" class="form-inline" 
                action="{{route ('posts.destroy',['post'=>$post->id])}}" >
                @csrf
                @method('DELETE')

                <input type="submit" value="delete" class="btn btn-primary"/>
            </form>
    @endforeach
@endsection('content1')