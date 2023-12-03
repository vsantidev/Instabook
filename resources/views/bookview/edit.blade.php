@extends('home.app')

@section('content')
{{-- SECTION HEADING START--}}
<section class="heading">
    <h1>Modification de votre livre</h1>
</section>
{{-- SECTION HEADING END--}}


{{-- SECTION EDIT START--}}
<section class="edition">
    <div class="row">
        @foreach ($array as $item)
            <div class="oldValue">
                <label for="avatar" class="picture">Ancienne publication :</label>
                <h3 class="title">titre : {{$item->title}}</h3>
                <p class="box">{{$item->synopsis}}</p>
                <p class="box">Nom : {{$item->lastname}}</p>
                <div class="box">Prénom : {{$item->firstname}}</div>
                <div class="box">Genre de littérature : {{$item->name}}</div>
            </div>
        
            <form action="{{route('book.update', $book->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label for="avatar" class="picture">Nouvelle publication :</label>
                <input type="text" name="lastname" placeholder="Nom" class="box" required>
                <input type="text" name="firstname" placeholder="Prénom" class="box" required>
                <input type="file" name="image" accept="jpg">
        
                <div class="box">
                    <select name="genre" class="option">
                        <option value=""> -- Genre -- </option>
                        @foreach ($arrayGenre as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <select name="tag" class="option">
                            <option value=""> -- Thème -- </option>
                        @foreach ($arrayTag as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            
                <input type="text" name="title" placeholder="Nouveau titre" class="box" required>
                <textarea name="synopsis" id="" cols="30" rows="10" placeholder="Nouveau synopsis ..." class="textaera" required></textarea>
                <button type="submit" class="button">valider</button>
            </form>
        @endforeach
    </div>
</section>

{{-- SECTION EDIT START--}}

@endsection