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

    public function store (Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
    }

}
