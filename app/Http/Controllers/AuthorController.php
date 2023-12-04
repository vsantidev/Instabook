<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\Book;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
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
    public function show(author $author)
    {
        $books = Book::where("author_id", $author->id)->get();
       
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
    public function edit(author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(author $author)
    {
        //
    }
}
