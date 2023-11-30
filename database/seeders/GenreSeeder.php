<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class GenreSeeder extends Seeder
{

    private $categories = ['bd', 'manga', 'policier', 'sciences fiction', 'narratif', 'poetique', 'theatral', 'fantastique', 'thriller', 'jeunesse', 'biographies', 'littérature', 'romance'];
    
    public function run(): void
    {
        foreach ($this->categories as $genre) {
            Genre::create([
            'name'=> $genre]);
        }
    }
}
