<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\SelectTags;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SearchbarController extends Controller
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
        
        if($request->option != 0){
            
            if ($request->option == 'titre') {


                $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                ->where("title",$request->search)
                ->leftJoin('genres', 'books.genre_id','genres.id')
                ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                ->leftJoin('authors', 'books.author_id', 'authors.id')
                ->get();


            } elseif ($request->option == 'genre') {
                $genre = Genre::where('name', $request->search)->get();


                    foreach ($genre as $key => $value) {

                        $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                        ->where("genre_id",$value->id)
                        ->leftJoin('genres', 'books.genre_id','genres.id')
                        ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                        ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                        ->leftJoin('authors', 'books.author_id', 'authors.id')
                        ->get();
                    }

            } elseif ($request->option == 'auteurs') {
                $author = Author::where('lastname',$request->search)
                    ->orWhere('firstname', $request->option)
                    ->get();
                    /* dd($author); */
                    foreach ($author as $key => $value) {

                        $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                        ->where("author_id",$value->id)
                        ->leftJoin('genres', 'books.genre_id','genres.id')
                        ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                        ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                        ->leftJoin('authors', 'books.author_id', 'authors.id')
                        ->get();
                        
                    }
                    
            }      
        } else {

                $genre = Genre::where('name',$request->search)->get();

                if($genre->count() == 0){
                    
                    $author = Author::where('lastname',$request->search)
                        ->orWhere('firstname', $request->option)
                        ->get();

                        foreach ($author as $key => $value) {

                            $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                            ->where("author_id",$value->id)
                            ->leftJoin('genres', 'books.genre_id','genres.id')
                            ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                            ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                            ->leftJoin('authors', 'books.author_id', 'authors.id')
                            ->get();
                        }
                        
                    if ($author->count() == 0 ) {

                        $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                        ->where("title", $request->search)
                        ->leftJoin('genres', 'books.genre_id','genres.id')
                        ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                        ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                        ->leftJoin('authors', 'books.author_id', 'authors.id')
                        ->get();
                    
                    }
                } else {

                    foreach ($genre as $key => $value) {

                        $book = Book::select("books.*", "genres.name as genre_name", "tags.name as tag_name" , "authors.*")
                        ->where("genre_id",$value->id)
                        ->leftJoin('genres', 'books.genre_id','genres.id')
                        ->leftJoin('select_tags', 'books.id', 'select_tags.book_id')
                        ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
                        ->leftJoin('authors', 'books.author_id', 'authors.id')
                        ->get();
                    }

                }  
        }

        if(!isset($book) || $book->count() == 0){
            $book =[
                "erreur" => 1
            ];
        } 

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
            "array" => $book,
            "tag" => $tag,
            "genre" => $genre,
            "annee" => $annee,
            "author" => $author
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
