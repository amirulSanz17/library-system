<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Routing for books, members, and categories
Route::get('/books', [BookController::class, 'index']);

Route::get('/members', [MemberController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);