@extends('home.app')
@section('title', 'recherche')
@section('content')

    <form action="{{route('search.store')}}" method="post">
        @csrf
        <input type="text" name="search" placeholder="recherche">

        <select name="option">
            <option value="0">-- option --</option>
            <option value="titre">titre</option>
            <option value="genre">genres</option>
            <option value="auteurs">auteurs</option>
        </select>

        <button type="submit">rechercher</button>
    </form>
@endsection