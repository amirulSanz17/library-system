<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BorrowingController;

// Routing untuk dashboard
Route::get('/', [DashboardController::class, 'index'])
->name('dashboard');

// Routing untuk books
Route::resource('books', BookController::class);

// Routing untuk members
Route::resource('members', MemberController::class);

// Routing untuk categories
Route::resource('categories', CategoryController::class);

// Routing untuk Borrowings
Route::resource('borrowings', BorrowingController::class);
