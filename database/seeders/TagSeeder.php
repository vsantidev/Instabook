<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    
    private $etiquette = ['Tragédie', 'Tous public', 'Enfant', 'Rigolo', 'Burlesque', 'Etudes', 'Etonnant', 'Suspense', 'Amour', 'Noel', 'Magique', 'Enigmatique', 'Decouverte', 'nature'];

    public function run(): void
    {
        foreach ($this->etiquette as $tag) {
            Tag::factory()->create([
                'name'=> $tag]);
        }
    }
}
