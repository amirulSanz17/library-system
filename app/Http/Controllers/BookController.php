<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Daftar Buku";
        $description = "Berikut adalah daftar buku yang tersedia";
        $books = Book::all();

        return view('books.index', compact ('title', 'description', 'books'));
    }

    public function show ($id)
    {
        return "Detail Buku <br>" ."ID: ". $id;
    }
}
