<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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

        $request -> validate([
            "commentaire" => "required|string",
            "note" => "required|integer"
        ]);

        

        $commentaire = $request ->commentaire;
        $note = $request ->note;
        $user_id = Auth::id();
        $newCommentaire = [
            'comment' => $request->commentaire,
            'note' => $request->note,
            'user_id' => $user_id,
            'book_id' => $request->book_id
            
        ];
       
        Comment::create($newCommentaire);

        return view('bookview.test')->with([
            "array" => $newCommentaire
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
