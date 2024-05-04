<?php

use App\Http\Controllers\ComicController;
use App\Models\comic;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index', [
        'comics' => comic::all(),
    ]);
})->name('index');

Route::resource('comics', ComicController::class);