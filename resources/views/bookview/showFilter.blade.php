@extends('home.app')
@section('title')
    <h1>index</h1>
@endsection
@section('content')
    <div class="container">
        <div class="filter">
            <div class="genre">
                <h3>genre</h3>    
                <a href="{{route('genre.index', 1)}}">bd</a>
                <a href="{{route('genre.index', 2)}}">Manga</a>
                <a href="{{route('genre.index', 3)}}">Policier</a>
                <a href="{{route('genre.index', 4)}}">Sciences Fiction</a>
                <a href="{{route('genre.index', 5)}}">Narratif</a>
                <a href="{{route('genre.index', 6)}}">Poetique</a>
                <a href="{{route('genre.index', 7)}}">Theatral</a>
                <a href="{{route('genre.index', 8)}}">Fantastique</a>
                <a href="{{route('genre.index', 9)}}">Thriller</a>
                <a href="{{route('genre.index', 10)}}">Jeunesse</a>
                <a href="{{route('genre.index', 11)}}">Biographies</a>
                <a href="{{route('genre.index', 12)}}">Littérature</a>
                <a href="{{route('genre.index', 13)}}">Romance</a>
            </div>
            <div class="tag">
                <h3>Tag</h3>
                <a href="">tragedie</a>
                <a href="">tous public</a>
                <a href="">enfant</a>
                <a href="">rigolo</a>
                <a href="">burlesque</a>
                <a href="">etudes</a>
                <a href="">etonnant</a>
                <a href="">suspense</a>
                <a href="">amour</a>
                <a href="">noel</a>
                <a href="">magique</a>
                <a href="">enigmatique</a>
                <a href="">decouverte</a>
                <a href="">nature</a>
            </div>
        </div>
    
        <div class="containerBook">
            @foreach ($array as $key => $book)
                <div class="cardBook">
                    <a href="{{route('book.show' , $book->id)}}">
                        <img src="{{ asset('storage/images/'.$book->image) }}" alt="" title="">
                        {{-- <div class="id">{{$book->id}}</div> --}}
                        <br>
                        <div class="titel">{{$book->title}}</div>
                        <div class="synopsis">{{$book->synopsis}}</div>
                        
                        <div class="genre">{{$book->genre}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection