@extends('layout')
@section('content1')
    <form action="{{route ('posts.store')}}" method="post">
    @csrf
    @include('posts._form')

    <button type="submit">Create</button>
    
    </form>
@endsection('content1')