@extends('home.app')
{{-- @section('title')
    <h1>index</h1>
@endsection --}}
@section('content')
    <div class="filter">
        <div class="box-container">
            {{-- <div class="box"> --}}
                <div class="genre">
                    <h3>-- genre de Littérature --</h3>    
                    <a href="{{route('genre.show', 1)}}">Bande dessinée</a> 
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
                    <h3>-- Tag --</h3>
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
            {{-- </div> --}}
            
        </div>
    </div>

    {{-- SECTION BLOGS STARTS --}}
    <section class="blogs">
        <div class="box-container">
            @foreach ($array as $key => $book)
            <div class="box">
                <div class="image">
                    <a href="{{route('book.show' , $book->id)}}">
                        <img src="{{ asset('storage/image/'.$book->image) }}" alt="" title="">
                        {{-- <div class="id">{{$book->id}}</div> --}}
                    </a>
                </div>
                <div class="content">
                    <div class="title-book">
                        <h3>{{$book->title}}</h3>
                        <p>{{$book->author_id}}</p>
                    </div>
                    {{-- DANS LE FUTUR - AFFICHAGE NOTATION AVEC LES ETOILES --}}
                    {{-- <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div> --}}
                    <div class="genre">{{$book->genre_id}}</div>

                    <a href="{{route('book.show' , $book->id)}}" class="button">Détails</a>
                    <div class="icons">
                        <i class="fa-regular fa-clock"> Paru en {{$book->annee}}</i>
                        <i class="fa-solid fa-user"> by admin</i>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>   
    </section>
    {{-- SECTION BLOGS END --}}

@endsection