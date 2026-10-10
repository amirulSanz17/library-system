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

    // Menampilkan Forrm Tambah Buku
    public function create()
    {
        return view('books.create');
    }

    // Menyimpan Data Buku Baru
    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);
        return redirect()->route('books.index');
    }

    // Menampilkan Form Edit Buku
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Menyimpan Perubahan Data Buku
    public function update(Request $request, Book $book)
    {   
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);
        return redirect()->route('books.index');
    }

    // Menghapus Data Buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}

