<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Daftar Buku";
        $description = "Berikut adalah daftar buku yang tersedia";
        $books = [
            'pemrograman PHP',
            'pemrograman web untuk pemula'
        ];

        return view('books.index', compact ('title', 'description', 'books'));
    }

    public function show ($id)
    {
        return "ID Buku: " . $id;
    }
}
