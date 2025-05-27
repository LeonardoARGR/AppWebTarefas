<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('atividades.index');
})->name('atividades.index');

Route::get('/create', function () {
    return view('atividades.create');
})->name('atividades.create');