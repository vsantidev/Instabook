@extends('home.app')
@section('title')
    <h1>modification</h1>
@endsection
@section('content')
    <div class="oldValue">
        <div class="">titre : {{$book->title}}</div>
        <div class="">synopsis : {{$book->synopsis}}</div>
        <div class="">image : {{$book->image}}</div>
        <div class="">nom : {{$author->lastname}}</div>
        <div class="">prenom : {{$author->firstname}}</div>
        <div class="">genre : {{$genre->name}}</div>
        <div class="">tag : {{$tag->name}}</div>
    </div>

    <form action="{{route('book.update', $book->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="lastname" placeholder="nom">
        <input type="text" name="firstname" placeholder="prenom">
        <input type="text" name="titre" placeholder="nouveau titre">
        <textarea name="synopsis" id="" cols="30" rows="10" placeholder="nouveau synopsis"></textarea>
        <button type="submit">valider</button>
    </form>
@endsection