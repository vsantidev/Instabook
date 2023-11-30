<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array = Book::all();

        return view('bookview.index')->with([
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
    public function show(Book $book)
    {
        $tag = Tag::findOrFail($book->tag_id);
        $genre = Genre::findOrFail($book->genre_id);
        $author = Author::findOrFail($book->author_id);
        $comment = Book::findOrFail($book->id)->comments;

        return view('bookview.show')->with([
            "book" => $book,
            "author" => $author,
            "tag" => $tag,
            "genre" => $genre,
            "comment" => $comment
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $tag = Tag::findOrFail($book->tag_id);
        $genre = Genre::findOrFail($book->genre_id);
        $author = Author::findOrFail($book ->author_id);
        $arrayGenre = Genre::all();
        $arrayTag = Tag::all();
        return view('bookview.edit')->with([
            "book" => $book,
            "author" => $author,
            "tag" => $tag,
            "genre" => $genre,
            "arrayGenre" => $arrayGenre,
            "arrayTag" => $arrayTag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request -> validate([
            'title' => 'required',
            'synopsis' => 'required',
            'lastname'=> 'required',
            'firstname'=> 'required',
        ]);

        $book = Book::findOrFail($book->id);
        $book ->title = $request ->title;
        $book ->synopsis = $request ->synopsis;
        $book ->image = $request ->image;
        $book ->tag_id = $request -> tag;
        $book -> save();
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Book $book)
    {
        $beforeDelete = $book;
        $book -> delete();
        return view('bookview.destroy')->with([
            'book' => $beforeDelete
        ]);   
    }
}
