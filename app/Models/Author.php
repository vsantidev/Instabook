<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // permet d'eviter l'envoi de la date et l'heure
    public $timestamps = false;

    protected $fillable = ['lastname', 'firstname' ];
}
