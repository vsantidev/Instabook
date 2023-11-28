@extends('home.app')
@section('title')
    <h1>index</h1>
@endsection
@section('content')
    @foreach ($array as $key => $book)
        <div class="cardBook">

            <a href="{{route('book.show' , $book->id)}}">
                
                <div class="id">{{$book->id}}</div>
                <div class="titel">{{$book->title}}</div>
                <div class="synopsis">{{$book->synopsis}}</div>
                <div class="image">{{$book->image}}</div>
                <div class="genre">{{$book->genre}}</div>
            </a>

        </div>
    @endforeach
@endsection