<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Routing untuk books, members, and categories
Route::get('/books', [BookController::class, 'index'])
->name('buku');

Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/members', [MemberController::class, 'index'])
->name('member');

Route::get('/categories', [CategoryController::class, 'index'])
->name('kategori');