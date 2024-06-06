<?php

use App\Http\Controllers\ComicController as AdminComicController;
use App\Models\comic;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index', [
        'comics' => comic::all(),
    ]);
})->name('index');

Route::resource('comics', AdminComicController::class);

/* test edit */
Route::get('/admin/edit/{comic}/edit', [AdminComicController::class, 'edit'])->name('admin.edit');
