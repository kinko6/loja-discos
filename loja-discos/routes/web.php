<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halley', function () {
    return view('halley');
});

use App\Http\Controllers\AlbumController;

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');
