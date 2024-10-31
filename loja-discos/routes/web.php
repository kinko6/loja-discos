<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halley', function () {
    return view('halley');
});

Route::get('/legal', function () {
    return view('legal');
});

use App\Http\Controllers\AlbumController;

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
