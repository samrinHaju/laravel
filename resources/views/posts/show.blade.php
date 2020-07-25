@extends('layout')
@section('content1')
    <h1> {{$posts->title}}</h1>
    <p>{{$posts->content}}</p>
    <p>Added{{$posts->created_at->diffForHumans()}}</p>
    
    @if((new Carbon\Carbon())->diffInMinutes($posts->created_at)<5)
       <strong> new!</strong>
    @endif
@endsection('content1')