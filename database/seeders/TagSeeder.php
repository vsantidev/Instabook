<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    
    private $etiquette = ['tragedie', 'tous public', 'enfant', 'rigolo', 'burlesque', 'etudes', 'etonnant', 'suspense', 'amour', 'noel', 'magique', 'enigmatique', 'decouverte', 'nature', 'enquete'];

    public function run(): void
    {
        foreach ($this->etiquette as $tag) {
            Tag::create([
                'name'=> $tag]);
        }
        echo array_rand($this->etiquette);
    }
}
