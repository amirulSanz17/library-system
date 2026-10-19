<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menambpilkan Kategori Buku
    public function index()
    {
        $title = "Daftar Kategori";
        $description = "Berikut adalah daftar kategori buku yang tersedia";
        $categories = Category::all();

        return view('categories.index', compact ('title', 'description', 'categories'));
    }

    public function create ()
    {
        return view ('categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validated);
        return redirect()
        ->route('categories.index')
        ->with('success','Data Kategori Berhasil Ditambahkan');
    }

    // Menampilkan Form Edit Katgori Buku
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Menyimpan Perubahan Kategori Buku
    public function update(Request $request, Category $category)
    {   
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validated);
        return redirect()
        ->route('categories.index')
        ->with('success','Data Kategori Berhasil Diperbarui');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
        ->with('success','Data Kategori Berhasil Dihapus');
    }
}
