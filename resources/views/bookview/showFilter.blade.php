@extends('home.app')

@section('content')
{{-- SECTION HEADING START--}}
<section class="heading">
    <h1>Recherche de votre livre</h1>
</section>
{{-- SECTION HEADING END--}}

{{-- SECTION SHOWFILTER START--}}
    <section class="filter">
        <div class="box-container">
                <div class="box">
                    <h3>-- genre de Littérature --</h3>    
                    @foreach ($genre as $item)
                        <a href="{{route('genre.show', $item->id)}}">| {{$item->name}}</a>
                    @endforeach
                </div>
                <div class="box">
                    <h3>-- Tag --</h3>
                    @foreach ($tag as $item)
                        <a href="{{route('tag.show', $item->id)}}">|{{$item->name}}</a>
                    @endforeach
                </div>                
                <div class="box">
                    <h3>-- année --</h3>
                    @foreach ($annee as $item)
                        <a href="{{route('year.show', $item->annee)}}">| {{$item->annee}}</a>
                    @endforeach

                </div>
                <div class="box">
                    <h3>-- author --</h3>

                    @foreach ($author as $item)
                        <a href="{{route('author.show', $item->id)}}">| {{$item->lastname}} {{$item->firstname}}</a>
                    @endforeach
                </div>
        </div>
    </section>
    
    {{-- SECTION SHOWFILTER END--}}
    {{-- SECTION BLOGS STARTS --}}
    <section class="blogs">
        <div class="box-container">
            @foreach ($array as $key => $book)
            <div class="box">
                <div class="image">
                    <a href="{{route('book.show' , $book->id)}}">
                        <img src="{{ asset('storage/image/'.$book->image) }}" alt="" title="">
                    </a>
                </div>
                <div class="content">
                    <div class="title-book">
                        <h3>{{$book->title}}</h3>
                        <p>{{$book->lastname}} {{$book->firstname}}</p>
                    </div>
                    {{-- DANS LE FUTUR - AFFICHAGE NOTATION AVEC LES ETOILES --}}
                    {{-- <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div> --}}
                    <div class="genre">{{$book->genre_name}}</div>

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