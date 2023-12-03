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
                <div class="box">
                    @foreach ($array as $item)
                        <div class="image">
                            <img src="{{ asset('storage/image/'.$book->image) }}" alt="" title=""  class="image-show">   
                        </div>
                        <div class="box">
                            <p class="title"><span>title : </span>{{$item->title}}</p>
                            <p class="sub-title"><span>synopsis : </span>{{$item->synopsis}}</p>
                            <p class="sub-title"><span>genre : </span>{{$item->name}}</p>
                            <p class="sub-title"><span>Autheur : </span>{{$item->lastname}} {{$item->firstname}}</p>
                            <p class="sub-title"><span>Thème(s) :</span>
                                @foreach ($arrayTag as $tags)
                                    <p>{{$tags->name}}</div>
                                @endforeach
                                    </p>
                            <div class="sub-title"><span>note : </span>{{$moyenne}} / 5</div>
                        </div>
                    @endforeach
                </div>

                <div class="box">
                    <?php if(Auth::check()){ ?>
                        <?php if(Auth::id() == $book->user_id){ ?>
                                <form action="{{route('book.destroy', $book->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="button">supprimer</button>
                                </form>
                    
                                <form action="{{route('book.edit', $book->id)}}" method="get">
                                    @csrf
                                    <button type="submit" class="button">modifier</button>
                                </form>
                        <?php } ?>
                    <?php } ?>
                </div>
        
            <div class="box-comment">
                <div class="box-allComment">
                        @foreach ($comment as $item)
                            <p>{{$item->comment}}</p>
                            <p>note : {{$item->note}}/5</p>
                        @endforeach
                </div>
                <?php if(Auth::check()){ ?>
                    <div class="newCommentaire">
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            <textarea name="commentaire" cols="30" rows="10" placeholder="Laissez votre commentaire ici ..."></textarea>
                            <input type="number" name="note"  placeholder="votre note sur 5" min="0" max="5" class="box">
                            <button type="submit" name="book_id" value="{{$book->id}}" class="button">valider</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    {{-- SECTION SHOW END--}}

@endsection