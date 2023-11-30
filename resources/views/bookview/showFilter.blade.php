@extends('home.app')
@section('title')
    <h1>index</h1>
@endsection
@section('content')
    <div class="container">
        <div class="filter">
            <div class="genre">
                <h3>genre</h3>    
                <a href="{{route('genre.show', 1)}}">bd</a>
                <a href="{{route('genre.show', 2)}}">Manga</a>
                <a href="{{route('genre.show', 3)}}">Policier</a>
                <a href="{{route('genre.show', 4)}}">Sciences Fiction</a>
                <a href="{{route('genre.show', 5)}}">Narratif</a>
                <a href="{{route('genre.show', 6)}}">Poetique</a>
                <a href="{{route('genre.show', 7)}}">Theatral</a>
                <a href="{{route('genre.show', 8)}}">Fantastique</a>
                <a href="{{route('genre.show', 9)}}">Thriller</a>
                <a href="{{route('genre.show', 10)}}">Jeunesse</a>
                <a href="{{route('genre.show', 11)}}">Biographies</a>
                <a href="{{route('genre.show', 12)}}">Littérature</a>
                <a href="{{route('genre.show', 13)}}">Romance</a>
            </div>
            <div class="tag">
                <h3>Tag</h3>
                <a href="{{route('tag.show', 1)}}">tragedie</a>
                <a href="{{route('tag.show', 2)}}">tous public</a>
                <a href="{{route('tag.show', 3)}}">enfant</a>
                <a href="{{route('tag.show', 4)}}">rigolo</a>
                <a href="{{route('tag.show', 5)}}">burlesque</a>
                <a href="{{route('tag.show', 6)}}">etudes</a>
                <a href="{{route('tag.show', 7)}}">etonnant</a>
                <a href="{{route('tag.show', 8)}}">suspense</a>
                <a href="{{route('tag.show', 9)}}">amour</a>
                <a href="{{route('tag.show', 10)}}">noel</a>
                <a href="{{route('tag.show', 11)}}">magique</a>
                <a href="{{route('tag.show', 12)}}">enigmatique</a>
                <a href="{{route('tag.show', 13)}}">decouverte</a>
                <a href="{{route('tag.show', 14)}}">nature</a>
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