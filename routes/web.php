<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Web\Home::class)->name('home');
Route::get('/cadastrar', \App\Livewire\Web\CreateFilm::class)->name('create');
// change: add {film} this is used to search by /ver/1 or /ver/2 etc.
Route::get('/ver/{film}', \App\Livewire\Web\ViewFilm::class)->name('see');