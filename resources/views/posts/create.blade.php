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
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit">Create</button>
    
    </form>
@endsection('content1')