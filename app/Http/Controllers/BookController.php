<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        return view('books.index');
    }
}
