<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Book;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TagController extends Controller
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
    public function show(Tag $tag)
    {

        $array = DB::table('select_tags')
        ->select("books.*", "genres.name as genre_name", "authors.*")
        ->where('select_tags.tag_id', $tag->id)
        ->leftJoin('books' , 'select_tags.book_id', 'books.id')
        ->leftJoin('genres', 'books.genre_id', 'genres.id')
        ->leftJoin('authors', 'authors.id', 'books.author_id')
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
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
