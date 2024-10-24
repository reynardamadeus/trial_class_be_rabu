<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BookController::class, 'getBook'])->name('getBook');
Route::get('/create', [BookController::class, 'getCreatePage'])->name('create-page');
Route::post('/create-data', [BookController::class, 'createBook'])->name('post-book');
