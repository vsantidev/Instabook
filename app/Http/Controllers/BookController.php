<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array = DB::table('books')
            ->select('books.*', "genres.name as genre_name" ,"authors.id as id_author" ,"authors.lastname as lastname","authors.firstname as firstname")
            ->leftJoin('genres' , 'books.genre_id', 'genres.id')
            ->leftJoin('authors', 'books.author_id' , 'authors.id')
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

        /* dd($array); */
        return view('bookview.showFilter')->with([
            "array" => $array,
            "tag" => $tag,
            "genre" => $genre,
            "annee" => $annee,
            "author" => $author
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $arrayGenre = Genre::all()->sortBy('name');
        $authors = Author::all()->sortBy('name');
        return view('bookview.create', compact('arrayGenre', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  

        $request->validate([
            'title' => 'required | max:255 | min:5',
            'synopsis' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'annee' => 'required | integer',
            'image'=> 'required | image | mimes:jpg,png,jpeg,gif,svg|max:3000'
        ]);
         
        $filename = time() . '.' . $request->file('image')->extension();
        
        $request->file('image')->storeAs(
            'image',
            $filename,
            'public'
        );

        $user_id = Auth::user()->id;
        if ($request->author_id == 0) 
        {
            $author = Author::firstOrCreate([
                'firstname'=> $request->firstname,
                'lastname' => $request->lastname
                ]);
            $author_id = $author->id;
        } else {
            $author_id = $request->author_id ;
        };


        Book::create([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'author_id' => $author_id,
            'genre_id' => $request->genre,
            'annee' => $request->annee,
            'user_id' => $user_id,
            'image' => $filename
        ]);


        return redirect(route('book.index'))->with('Succès!', 'Votre livre a bien été rajouté!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        /* dd($book); */

        $comment = DB::table('comments')
            ->where('book_id', $book->id)
            ->get();

        $array = DB::table('books')
            ->where('books.id', $book->id)
            ->leftJoin('authors', 'books.author_id', 'authors.id')
            ->leftJoin('genres', 'books.genre_id', 'genres.id')
            ->get();
        $arrayTag = DB::table('select_tags')
            ->where('book_id', $book->id)
            ->leftJoin('tags', 'select_tags.tag_id', 'tags.id')
            ->get();

        $note = 0;
        foreach($comment as $key){
            $note += $key->note;
        }
       
        $numbersComment = $comment->count();
        if($numbersComment != 0){
            $resultnote = $note / $numbersComment;
        } else {
            $resultnote = "aucune note";
        }
        
        
        return view('bookview.show')->with([
            "book" => $book,
            "array" => $array,
            "arrayTag" => $arrayTag,
            "comment" => $comment,
            "moyenne" => $resultnote
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $array = DB::table('books')
            ->where('books.id', $book->id)
            ->leftJoin('genres', 'books.genre_id', 'genres.id')
            ->leftJoin('authors', 'books.author_id', 'authors.id')
            ->get();
        $arrayGenre = Genre::all();
        $arrayTag = Tag::all();

        return view('bookview.edit')->with([
            "book" => $book,
            "array" => $array,
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
