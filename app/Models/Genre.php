<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;
     // permet d'eviter l'envoi de la date et l'heure
     public $timestamps = false;
     // permet de modifier les noms dans l'édit
     protected $fillable = ['name'];

     public function book() : HasMany
     {
        return $this->hasMany(Book::class);
     }
}
