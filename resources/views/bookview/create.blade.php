@extends('home.app')

@section('content')

    {{-- IF ERROR --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="textError">{{$error}}</div>
        @endforeach
    @endif

    {{-- SECTION FORMULAIRE START--}}
    <section class="creation">
        <h1 class="title">Création du livre</h1>
        <div class="row">
            <form action='{{route('book.store')}}' method='post' class="content" enctype="multipart/form-data">
                @csrf
                <input type='text' name='title' placeholder="Titre du livre" class="box">
                <input type='year' name='annee' placeholder="Année du livre" class="box">
                <p>Le résumé doit-être compris entre 10 et 120 caractères</p>
                <textarea type='text' name='synopsis' cols="30" rows="10" placeholder="Résumé du livre" class="textaera"></textarea>
                
                <div class="box">
                    <label for="avatar" class="picture">Renseignez l'auteur ou l'autrice :</label>
                    <p>Si le nom n'a pas était encore enregistré, veuillez laisser l'onglet sur "Nouveau" et rentrée le nom et le prénom dans les lignes ci-dessous!</p>
                    <select type='text' name='author' placeholder="Auteur / Autrice du livre" class="option">
                        <option value="0"> -- Nouveau --</option>
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->lastname}} {{$author->firstname}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="firstname" placeholder="Nom" class="box">
                    <input type="text" name="lastname" placeholder="Prénom" class="box">
                </div>

                <div class="box">
                    <label for="avatar" class="picture">Choississez la couverture du livre :</label>
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg" class="file" />
                    <select name="genre" class="option">
                        <option value="0"> -- Genre --</option>
                        @foreach ($arrayGenre as $item)
                        
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type='submit' class="button" >Créer</button>
            </form>
        </div>
    </section>

    {{-- SECTION FORMULAIRE END--}}

@endsection