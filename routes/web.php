<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('atividades.index');
})->name('atividades.index');

Route::get('/create', function () {
    return view('atividades.create');
})->name('atividades.create');

Route::get('/edit', function () {
    return view('atividades.edit');
})->name('atividades.edit');

Route::get('/meusdados', function () {
    return view('usuario.index');
})->name('usuario.index');