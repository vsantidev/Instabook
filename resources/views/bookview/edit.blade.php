@extends('home.app')

@section('content')
{{-- SECTION HEADING START--}}
<section class="heading">
    <h1>Modification de votre livre</h1>
</section>
{{-- SECTION HEADING END--}}

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
                <option value="">-- genre --</option>
                @foreach ($arrayGenre as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
    
            <select name="tag">
                    <option value="">-- tag --</option>
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