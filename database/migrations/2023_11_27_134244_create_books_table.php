<?php

use App\Models\Genre;
use App\Models\User;
use App\Models\Author;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('synopsis');
            $table->string('image')->nullable();
            $table->foreignIdFor(Tag::class)->constrained;
            $table->foreignIdFor(Author::class)->constrained();
            $table->foreignIdFor(Genre::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
