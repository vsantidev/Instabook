@extends('home.app')
@section('title')
    <h1>modification</h1>
@endsection
@section('content')
<section class="edition">
    <div class="box-container">
        <div class="oldValue">
            <div class="">titre : {{$book->title}}</div>
            <div class="">synopsis : {{$book->synopsis}}</div>
            <div class="">image : {{$book->image}}</div>
            <div class="">nom : {{$author->lastname}}</div>
            <div class="">prenom : {{$author->firstname}}</div>
            <div class="">genre : {{$genre->name}}</div>
            <div class="">tag : {{$tag->name}}</div>
        </div>
    
        <form action="{{route('book.update', $book->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="lastname" placeholder="nom" required>
            <input type="text" name="firstname" placeholder="prenom" required>
            <input type="file" name="image" accept="jpg">
    
            <select name="genre">
                @foreach ($arrayGenre as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
    
            <select name="tag">
                @foreach ($arrayTag as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <input type="text" name="title" placeholder="nouveau titre" required>
            <textarea name="synopsis" id="" cols="30" rows="10" placeholder="nouveau synopsis" required></textarea>
            <button type="submit">valider</button>
        </form>
    </div>

</section>

@endsection