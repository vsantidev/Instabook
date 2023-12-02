@extends('home.app')

@section('content')
{{-- erreur présente --}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="textError">{{$error}}</div>
    @endforeach
    
@endif

{{-- SECTION FORMULAIRE START--}}
<section class="creation">
    <h1>Création du livre</h1>
    <div class="box-container">
        <div class="box">
            <form action='{{route('book.store')}}' method='post' class="contentList__card" enctype="multipart/form-data">
                @csrf
                <input type='text' name='title' placeholder="Titre du livre" class="border-gray-600 border-2 block my-2">
                <input type='year' name='annee' placeholder="Anne du livre" class="border-gray-600 border-2 block my-2">
        
                <textarea type='text' name='synopsis' cols="30" rows="10" placeholder="Résumé du livre"></textarea>
                *maximum 90 caractères
                <select type='text' name='author' placeholder="Auteur / Autrice du livre">
                    <option value="0">Nouveau</option>
                    @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->lastname}} {{$author->firstname}}</option>
                    @endforeach
                </select>
                <input type="text" name="firstname" placeholder="Nom">
                <input type="text" name="lastname" placeholder="Prénom">
                
                {{-- <input type='number' name='note' placeholder="Nombre de follower"> --}}
                <label for="avatar">Choississez la couverture du livre:</label>
                <input type="file" id="image" name="image" accept="image/png, image/jpeg" />
                <select name="genre">
                    @foreach ($arrayGenre as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <button type='submit' class="button" >Créer</button>
            </form>
        </div>
    </div>
</section>

{{-- SECTION FORMULAIRE END--}}

@endsection