@extends('home.app')
@section('title')
    <h1>modification</h1>
@endsection
@section('content')
<section class="edition">
    <div class="box-container">
        @foreach ($array as $item)
            {{-- {{dd($item->title)}} --}}
            <div class="oldValue">
                <div class="">titre : {{$item->title}}</div>
                <div class="">synopsis : {{$item->synopsis}}</div>
                <div class="">image : {{$item->image}}</div>
                <div class="">nom : {{$item->lastname}}</div>
                <div class="">prenom : {{$item->firstname}}</div>
                <div class="">genre : {{$item->name}}</div>
                {{-- <div class="">tag : {{$tag->name}}</div> --}}
            </div>
        
        @endforeach

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