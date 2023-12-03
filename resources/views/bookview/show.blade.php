<?php 
    use Illuminate\Support\Facades\Auth;
?>

@extends('home.app')

@section('content')
    {{-- SECTION HEADING START--}}
    <section class="heading">
        <h1>Détails du livre</h1>
    </section>
    {{-- SECTION HEADING END--}}

    {{-- SECTION SHOW START--}}
    <section class="details">
        <div class="row">
            {{-- <div class="bookDetails"> --}}
                <div class="box">
                    @foreach ($array as $item)
                        <div class="image">
                            <img src="{{ asset('storage/image/'.$book->image) }}" alt="" title="">   
                        </div>
                        <div class="box">
                            <div class="title">title : {{$item->title}}</div>
                            <div class="synopsis">synopsis : {{$item->synopsis}}</div>
                            <div class="genre">genre : {{$item->name}}</div>
                            <div class="author">auteur : {{$item->lastname}} {{$item->firstname}}</div>
                            <div>Thème(s) :
                                @foreach ($arrayTag as $tags)
                                    <div>{{$tags->name}}</div>
                                @endforeach
                            </div>
                            <div class="moyenne">note : {{$moyenne}} / 5</div>
                        </div>
                    @endforeach
                </div>

                <div class="box">
                    <?php if(Auth::check()){ ?>
                        <?php if(Auth::id() == $book->user_id){ ?>
                            <div >
                                <form action="{{route('book.destroy', $book->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="button">supprimer</button>
                                </form>
                    
                                <form action="{{route('book.edit', $book->id)}}" method="get">
                                    @csrf
                                    <button type="submit" class="button">modifier</button>
                                </form>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
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
                <?php if(Auth::check()){ ?>
                    <div class="newCommentaire">
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            <textarea name="commentaire" cols="30" rows="10"></textarea>
                            <input type="number" name="note"  placeholder="votre note sur 5" min="0" max="5">
                            <button type="submit" name="book_id" value="{{$book->id}}" class="button">valider</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    {{-- SECTION SHOW END--}}

@endsection