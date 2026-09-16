<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Routing untuk books
Route::get('/books', [BookController::class, 'index'])
->name('buku');
Route::get('/books/{id}', [BookController::class, 'show']);

// Routing untuk members
Route::get('/members', [MemberController::class, 'index'])
->name('member');
Route::get('/members/{id}', [MemberController::class, 'show']);

// Routing untuk categories
Route::get('/categories', [CategoryController::class, 'index'])
->name('kategori');

// Routing untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');