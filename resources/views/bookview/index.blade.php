@extends('home.app')
@section('title')
    <h1>index</h1>
@endsection
@section('content')
    <div class="container">
        <div class="filter">
            <div class="genre">
                <h3>genre</h3>    
                <a href="">bd</a>
                <a href="">Manga</a>
                <a href="">Policier</a>
                <a href="">Sciences Fiction</a>
                <a href="">Narratif</a>
                <a href="">Poetique</a>
                <a href="">Theatral</a>
                <a href="">Fantastique</a>
                <a href="">Thriller</a>
                <a href="">Jeunesse</a>
                <a href="">Biographies</a>
                <a href="">Littérature</a>
                <a href="">Romance</a>
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