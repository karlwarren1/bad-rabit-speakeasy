<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Menu;
use App\Livewire\BuildNotes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Two public pages per the brief: Home and Menu. Build Notes is reachable
| only via the small footer link — pull this route before launch.
*/

Route::get('/', Home::class)->name('home');
Route::get('/menu', Menu::class)->name('menu');
Route::get('/build-notes', BuildNotes::class)->name('build-notes'); // TODO remove before launch
