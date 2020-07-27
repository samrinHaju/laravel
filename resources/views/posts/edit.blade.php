@extends('layout')
@section('content1')
    <form method="post" action="{{route ('posts.update',['post'=>$post->id])}}" >
    @csrf
    @method('PUT')
    @include('posts._form')

    <button type="submit">Update</button>
    
    </form>
@endsection