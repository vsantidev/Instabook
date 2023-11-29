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
        /* dd($book->id); */
        $val = $book->id;
/*         $comment = Book::withWhereHas('comment', fn($query) =>
            $query->where('comment', 'note' ,$book_id)
        )->get(); */

        $comment = Book::findOrFail($book->id)->comments;

       /*  dd($comment); */

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
        return view('bookview.edit')->with([
            "book" => $book,
            "author" => $author,
            "tag" => $tag,
            "genre" => $genre
        ]);
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
        $beforeDelete = $book;
        $book -> delete();
        return view('bookview.destroy')->with([
            'book' => $beforeDelete
        ]);   
    }
}
