<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Book;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        $books = Book::where("genre_id", $genre->id)->get();

/*         $array = DB::table('genres')
            ->select("books.*", "genres.name as genre_name", "authors.*")
            ->where('genres.id', $genre->id)
            ->leftJoin('books', 'books.genre_id', 'genres.id')
            ->leftJoin('authors', 'books.author_id', 'authors.id')
            ->get();
         */
            $tag = DB::table('tags')
            ->get();
        $genre = DB::table('genres')
            ->get();
        $annee = DB::table('books')
            ->select('books.annee','books.id')
            ->get();
        $author = DB::table('authors')
            ->get();

        /* dd($author); */
        return view('bookview.showFilter')->with([
            "array" => $books,
            "tag" => $tag,
            "genre" => $genre,
            "annee" => $annee,
            "author" => $author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
