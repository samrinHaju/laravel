@extends('layout')
@section('content1')
    <form method="post" action="{{route ('posts.update',['post'=>$post->id])}}" >
    @csrf
    @method('PUT')
    <p>
        <label for="">title</label>
        <input type="text" name="title" value="{{ old('title',$post->title) }}"/>
    </p>

    <p>
        <label for="">content</label>
        <input type="text" name="content" 
        value="{{ old('content',$post->content) }}"/>
    </p>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit">Update</button>
    
    </form>
@endsection('content1')