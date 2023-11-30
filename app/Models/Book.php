<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'synopsis','image', 'author_id', 'user_id', 'annee', 'genre_id'];


    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

}
