<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class GenreSeeder extends Seeder
{

    private $categories = ['BD', 'Manga', 'Policier', 'Sciences Fiction', 'Narratif', 'Poetique', 'Theatral', 'Fantastique', 'Thriller', 'Jeunesse', 'Biographies', 'Littérature', 'Romance'];
    
    public function run(): void
    {
        foreach ($this->categories as $genre) {
            Genre::factory()->create([
            'name'=> $genre]);
        }
    }
}
