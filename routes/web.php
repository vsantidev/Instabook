<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SelectTagsController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SearchbarController;
use App\Http\Controllers\YearController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // redirige sur la page blog si prend dès la racine
    return redirect(route('book.index'));
});

// route qui mène au controlleur principal qui gère le CRUD
/* route::resource('book', BookController::class); */

Route::get('/dashboard', function () {
    return redirect(route('book.index'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/book' ,BookController::class);
Route::resource('/comment', CommentController::class);
Route::resource('/author', AuthorController::class);
Route::resource('/tag' ,TagController::class);
Route::resource('/selectTag' ,SelectTagsController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/search', SearchbarController::class);
Route::resource('/year', YearController::class);