@extends('mise_en_page.app')
@section('title')
    <h1>details du livre</h1>
@endsection

@section('content')
    <div class="bookDetails">
        <div>
            <div class="image">{{$book->image}}</div>
        </div>
        <div>
            <div class="titel">{{$book->title}}</div>
            <div class="synopsis">{{$book->synopsis}}</div>
            <div class="genre">{{$book->genre}}</div>
            <div class="author">{{$author->firsname}}</div>
        </div>

        <div>
            <form action="{{route('book.destroy', $book->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">supprimer</button>
            </form>

            <form action="{{route('book.update', $book->id)}}" method="post">
                @csrf
                @method('put')
                <button type="submit">modifier</button>
            </form>
        </div>

    </div>
@endsection