<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title' => fake()->text(20),
            // 'synopsis' => fake()->text(90),
            // 'author' => fake()->randomElement(Author::all()),
            // 'genres' => fake()->randomElement(Genre::all()),
            // 'tag' => fake()->randomElement(Tag::all()),
            // 'comment' => fake()->numberBetween(1,50),
            // 'user_id' => fake()->randomElement(User::all()),
            
        ];
    }
}
