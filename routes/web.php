<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('atividades.index');
})->name('atividades.index');