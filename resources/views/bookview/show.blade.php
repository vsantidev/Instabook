<?php 
    use Illuminate\Support\Facades\Auth;
?>

@extends('home.app')
@section('title')
    <h1>details du livre</h1>
@endsection

@section('content')
    <div class="bookDetails">
        <div class="bookDetailsContainer">
          <div class="image">
            {{-- <img class="image" src="{{$book->image}}"/> --}}
            <img src="{{ asset('storage/image/'.$book->image) }}" alt="" title="">   
          </div>
            <div class="bookData">
                <div class="title">{{$book->title}}</div>
                <div class="synopsis">{{$book->synopsis}}</div>
                <div class="genre">{{$genre->name}}</div>
                {{-- <div class="tag">{{$tag->name}}</div> --}}
                <div class="author">{{$author->firstname}} {{$author->lastname}}</div>
                <div>{{$book->id}}</div>
            </div>

        </div>

        <?php if(Auth::check()){ ?>
            <?php if(Auth::id() == $book->user_id){ ?>
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
            <?php } ?>
        <?php } ?>



        
    </div>

    <div class="commentaire">
        <div class="allCommentaire">
            <div class="avis">
                @foreach ($comment as $item)
                    <p>{{$item->comment}}</p>
                    <p>note : {{$item->note}}/5</p>
                @endforeach
            </div>
        </div>
        <div class="newCommentaire">
            <form action="{{route('comment.store')}}" method="post">
                @csrf
                <textarea name="commentaire" cols="30" rows="10"></textarea>
                <input type="number" name="note"  placeholder="votre note sur 5" min="0" max="5">
                <button type="submit" name="book_id" value="{{$book->id}}">valider</button>
            </form>
        </div>
    </div>
@endsection