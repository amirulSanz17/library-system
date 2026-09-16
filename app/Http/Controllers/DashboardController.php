<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Selamat Datang di Sistem Informasi Perpustakaan";
        $description = "Ini adalah halaman dashboard untuk sistem informasi perpustakaan.";

        $jumlahBuku = 5;
        $jumlahMember = 5;
        return view('dashboard.index', compact ('title', 'description', 'jumlahBuku', 'jumlahMember'));
    }
}
