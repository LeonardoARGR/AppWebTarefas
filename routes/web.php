<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TarefasController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/cadastro', [AuthController::class, 'showRegisterForm'])->name('auth.cadastro');
Route::post('/cadastro', [AuthController::class, 'register'])->name('auth.cadastrar');  

Route::middleware(['firebase'])->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/', [TarefasController::class, 'index'])->name('tarefas.index');
    Route::get('/tarefas/a', [TarefasController::class, 'show'])->name('tarefas.show');
    Route::get('/create', [TarefasController::class, 'create'])->name('tarefas.create');
    Route::post('/store', [TarefasController::class, 'store'])->name('tarefas.store');
    Route::get('/tarefas/{id}/edit', [TarefasController::class, 'edit'])->name('tarefas.edit');
    Route::put('/tarefas/{id}/update', [TarefasController::class, 'update'])->name('tarefas.update');
    Route::delete('/tarefas/{id}/delete', [TarefasController::class, 'delete'])->name('tarefas.delete');

    Route::get('/meusdados', fn () => view('usuario.index'))->name('usuario.index');

});

