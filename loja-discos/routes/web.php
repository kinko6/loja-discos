<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halley', function () {
    return view('halley');
});

Route::get('/legal', function () {
    return view('legal');
});


// Route::resource('discos', DiscoController::class);

