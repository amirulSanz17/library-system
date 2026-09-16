<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Selamat Datang di Sistem Informasi Perpustakaan";

        return view('dashboard.index', compact ('title'));
    }
}
