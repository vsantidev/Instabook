@extends('home.app')
@section('title')
    <h1>details du livre</h1>
@endsection

@section('content')
    <div class="bookDetails">
        <div class="bookDetailsContainer">
            <div class="bookImage">
                <div class="image">{{$book->image}}</div>
            </div>
            <div class="bookData">
                <div class="title">{{$book->title}}</div>
                <div class="synopsis">{{$book->synopsis}}</div>
                <div class="genre">{{$genre->name}}</div>
                <div class="tag">{{$tag->name}}</div>
                <div class="author">{{$author->firstname}} {{$author->lastname}}</div>
            </div>
        </div>

        <div class="boutonCreateur">
            <form action="{{route('book.destroy', $book->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">supprimer</button>
            </form>

            <form action="{{route('book.edit', $book->id)}}" method="get">
                @csrf
                <button type="submit">modifier</button>
            </form>
        </div>

    </div>

    <div class="commentaire">
        <div class="allCommentaire"></div>
        <div class="newCommentaire">
            <form action="{{route('commentaire.create')}}" method="post">
                @csrf
                <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
                <input type="number" name="note" id="" placeholder="votre note sur 5" min="0" max="5">
                <button type="submit">valider</button>
            </form>
        </div>
    </div>
@endsection