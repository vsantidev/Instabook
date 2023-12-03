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
            {{-- <div class="filter"> --}}
                <div class="box">
                    <h3>-- genre de Littérature --</h3>    
                    <a href="{{route('genre.show', 1)}}">| Bande dessinée</a>
                    <a href="{{route('genre.show', 11)}}">| Biographie</a>
                    <a href="{{route('genre.show', 8)}}">| Fantastique</a>
                    <a href="{{route('genre.show', 10)}}">| Jeunesse</a>
                    <a href="{{route('genre.show', 12)}}">| Littérature</a>
                    <a href="{{route('genre.show', 2)}}">| Manga</a>
                    <a href="{{route('genre.show', 5)}}">| Narratif</a>
                    <a href="{{route('genre.show', 6)}}">| Poétique</a>
                    <a href="{{route('genre.show', 3)}}">| Policier</a>
                    <a href="{{route('genre.show', 13)}}">| Romance</a>
                    <a href="{{route('genre.show', 4)}}">| Sciences Fiction</a>
                    <a href="{{route('genre.show', 7)}}">| Théâtral</a>
                    <a href="{{route('genre.show', 9)}}">| Thriller</a>
                </div>
                <div class="box">
                    <h3>-- Tag --</h3>
                    <a href="{{route('tag.show', 9)}}">| amour</a>
                    <a href="{{route('tag.show', 5)}}">| burlesque</a>
                    <a href="{{route('tag.show', 13)}}">| decouverte</a>
                    <a href="{{route('tag.show', 12)}}">| Énigmatique</a>
                    <a href="{{route('tag.show', 3)}}">| enfant</a>
                    <a href="{{route('tag.show', 7)}}">| Étonnant</a>
                    <a href="{{route('tag.show', 6)}}">| Études</a>
                    <a href="{{route('tag.show', 11)}}">| magique</a>
                    <a href="{{route('tag.show', 14)}}">| nature</a>
                    <a href="{{route('tag.show', 10)}}">| noël</a>
                    <a href="{{route('tag.show', 4)}}">| rigolo</a>
                    <a href="{{route('tag.show', 8)}}">| suspense</a>
                    <a href="{{route('tag.show', 2)}}">| tous public</a>
                    <a href="{{route('tag.show', 1)}}">| tragédie</a>
                </div>
            {{-- </div> --}}
        </div>
    </section>
    
    {{-- SECTION SHOWFILTER END--}}
    {{-- SECTION BLOGS STARTS --}}
    <section class="blogs">
        <div class="box-container">

                @foreach ($array as $key => $book)
                    <?php if($key == 'erreur'){ ?>
                        <h1>valeur inconnue ou incorrect</h1>
                    <?php } else {?>

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
                        
                    <?php } ?>
                @endforeach  
           

        </div>   
    </section>
    {{-- SECTION BLOGS END --}}

@endsection