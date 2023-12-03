@extends('home.app')
@section('title')
    <h1>livre detruit</h1>
@endsection
@section('content')
    <div>
        <div class="image">{{$book->image}}</div>
    </div>
    <div>
        <div class="titel">{{$book->title}}</div>
        <div class="synopsis">{{$book->synopsis}}</div>
        <div class="genre">{{$book->genre}}</div>
    </div>

@endsection