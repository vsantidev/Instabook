<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearController extends Controller
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
    public function show(Request $id)
    {
        $array = DB::table('books')
        ->select("books.*", "genres.name as genre_name", "authors.*")
        ->where('books.annee', $id->year)
        ->leftJoin('genres', 'books.genre_id', 'genres.id')
        ->leftJoin('authors', 'books.author_id', 'authors.id')
        ->get();

    
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
            "array" => $array,
            "tag" => $tag,
            "genre" => $genre,
            "annee" => $annee,
            "author" => $author
        ]);
    
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
