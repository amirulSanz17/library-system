<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Daftar Buku";
        $description = "Berikut adalah daftar buku yang tersedia";
        $books = Book::with('category')->get();
        
        return view('books.index', compact ('title', 'description', 'books'));
    }

    // Menampilkan Form Tambah Buku
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    // Menyimpan Data Buku Baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900',
            'stock' => 'required|integer|min:0',
        ]);

        Book::create($validated);
        return redirect()
        ->route('books.index')
        ->with('success','Data Buku Berhasil Ditambahkan');
    }

    // Menampilkan Form Edit Buku
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
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

        $book->update($validated);
        return redirect()
        ->route('books.index')
        ->with('success','Data Buku Berhasil Diperbarui');
    }

    // Menghapus Data Buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
        ->with('success','Data Buku Berhasil Dihapus');
    }
}

