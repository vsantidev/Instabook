<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        User::factory()->create([
            'name' => 'SerVer',
            'email' => 'Servertest@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('topsecret'),
            'label'=> 'admin',
        ]);
        
        User::factory(10)->create();

            $this->call([
                AuthorSeeder::class,
                GenreSeeder::class,
                TagSeeder::class,
                BookSeeder::class,
                CommentSeeder::class,
            ]);

    }
}
