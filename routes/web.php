<?php

use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\TarefasController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/cadastro', fn () => view('auth.cadastro'))->name('auth.cadastro');


Route::get('/', [TarefasController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/a', [TarefasController::class, 'show'])->name('tarefas.show');

Route::get('/create', [TarefasController::class, 'create'])->name('tarefas.create');
Route::post('/store', [TarefasController::class, 'store'])->name('tarefas.store');

Route::get('/tarefas/{id}/edit', [TarefasController::class, 'edit'])->name('tarefas.edit');
Route::put('/tarefas/{id}/update', [TarefasController::class, 'update'])->name('tarefas.update');

Route::delete('/tarefas/{id}/delete', [TarefasController::class, 'delete'])->name('tarefas.delete');

Route::get('/meusdados', fn () => view('usuario.index'))->name('usuario.index');

Route::post('/logout', [FirebaseAuthController::class, 'logout'])->name('auth.logout');
