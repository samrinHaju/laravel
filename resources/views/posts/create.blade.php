@extends('layout')
@section('content1')
    <form action="{{route ('posts.store')}}" method="post">
    @csrf
    <p>
        <label for="">title</label>
        <input type="text" name="title"/>
    </p>

    <p>
        <label for="">content</label>
        <input type="text" name="content"/>
    </p>
    <button type="submit">Create</button>
    
    </form>
@endsection('content1')