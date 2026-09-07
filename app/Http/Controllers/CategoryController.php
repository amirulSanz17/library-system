<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // // Menambpilkan Kategori Buku
        public function index()
    {
        return view('categories.index');
    }
}
