<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halley', function () {
    return view('halley');
});

Route::apiResource('discs', DiscController::class);

Route::get('/', [DiscController::class, 'index'])->name('disc.index'); // Rota para listar usuários
Route::get('/disc/create', [DiscController::class, 'create'])->name('disc.create'); // Rota para criar usuário
Route::post('/disc', [DiscController::class, 'store'])->name('disc.store'); // Rota para armazenar usuário
Route::get('/disc/{id}/edit', [DiscController::class, 'edit'])->name('disc.edit'); // Rota para editar usuário
Route::put('/disc/{id}', [DiscController::class, 'update'])->name('disc.update'); // Rota para atualizar usuário
Route::delete('/disc/{id}', [DiscController::class, 'destroy'])->name('disc.destroy'); // Rota para excluir usuário