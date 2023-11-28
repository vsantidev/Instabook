<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => fake()->text(rand(50,100)),
            'note' => fake()->numberBetween(0,5),
            'book_id' => fake()->randomElement(Book::all()),
            'user_id' => fake()->randomElement(User::all()),
        ];
    }
}
