<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DesenhoController; 
use Illuminate\Support\Facades\Route;
use App\Models\Desenho;

Route::get('/', function () {
    return view('welcome');
});

// Rota para o dashboard
Route::get('/bemv', function () {
    $desenhos = Desenho::all();
    return view('bemv', compact('desenhos'));
})->middleware(['auth', 'verified'])->name('bemv');

// Rota para o Desenvolvedores
Route::get('/desenvolvedores', function () {
    $desenhos = Desenho::all();
    return view('desenvolvedores', compact('desenhos'));
})->middleware(['auth', 'verified'])->name('desenvolvedores');

// Rota para o dashboard
Route::get('/dashboard', function () {
    $desenhos = Desenho::all();
    return view('dashboard', compact('desenhos'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas para o Desenho
    Route::post('/desenho/adicionar', [DesenhoController::class, 'armazenar'])->name('desenho.store');
    Route::get('/desenho/{id}/editar', [DesenhoController::class, 'editar'])->name('desenho.edit');
    Route::post('/desenho/{id}/atualizar', [DesenhoController::class, 'atualizar'])->name('desenho.update');
    Route::delete('/desenho/{id}/excluir', [DesenhoController::class, 'excluir'])->name('desenho.destroy'); 
});

require __DIR__.'/auth.php';
