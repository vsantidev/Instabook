<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ 'comment', 'note', 'user_id', 'book_id' ];

    //premet d'eviter l'envoi de la date et l'heure
    public $timestamps = false;

}
