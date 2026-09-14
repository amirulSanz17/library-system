<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // // Menambpilkan Kategori Buku
    public function index()
    {
        $title = "Daftar Kategori";
        $description = "Berikut adalah daftar kategori buku yang tersedia";
        $categories = [
            'Pemrograman',
            'Web Development'
        ];

        return view('categories.index', compact ('title', 'description', 'categories'));
    }
}
