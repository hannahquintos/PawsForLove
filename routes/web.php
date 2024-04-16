<?php

use App\Http\Controllers\BreedController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [DogController::class, 'index'])->name('index');

Route::get('/dog/{dog}', [DogController::class, 'show'])->name('dog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//routes for dogs
Route::get(
    'dogs/trash/{id}', 
    [DogController::class, 'trash']
    )->name('dogs.trash')->middleware(['auth', 'verified']);

Route::get(
    'dogs/trashed/', 
    [DogController::class, 'trashed'] 
    )->name('dogs.trashed')->middleware(['auth', 'verified']);

Route::get(
    'dogs/restore/{id}', 
    [DogController::class, 'restore'] 
    )->name('dogs.restore')->middleware(['auth', 'verified']);

Route::resource('dogs', DogController::class)->middleware(['auth', 'verified']);

//routes for breeds
Route::get(
    'breeds/trash/{id}', 
    [BreedController::class, 'trash']
    )->name('breeds.trash')->middleware(['auth', 'verified']);

Route::get(
    'breeds/trashed/', 
    [BreedController::class, 'trashed'] 
    )->name('breeds.trashed')->middleware(['auth', 'verified']);

Route::get(
    'breeds/restore/{id}', 
    [BreedController::class, 'restore'] 
    )->name('breeds.restore')->middleware(['auth', 'verified']);

Route::resource('breeds', BreedController::class)->middleware(['auth', 'verified']);