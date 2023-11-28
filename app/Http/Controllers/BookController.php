<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public $array = [
        ['product_id' => 'titre book 1', 'name' => 'harry potter'],
        ['product_id' => 'titre book 2', 'name' => 'one piece'],
    ];
     
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array = Book::all();

        return view('mise_en_page.index')->with([
            'array' => $array
        ]);
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
   /*  public function show(Book $book) */
    public function show(int $book)
    {
        $book = Book::findOrFail($book, $author_id);
        $author = Author::findOrFail($author_id);
        /* dd($book); */
        return view('mise_en_page.details')->with([
            "book" => $book,
            "author" => $author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
