<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Member;

class DashboardController extends Controller
{
    // Menampilkan Daftar Buku
    public function index()
    {
        $title = "Selamat Datang di Sistem Informasi Perpustakaan";
        $description = "Ini adalah halaman dashboard untuk sistem informasi perpustakaan.";

        // Jumlah buku dan member
        $jumlahBuku = Book::count();
        $jumlahMember = Member::count();

        // Mengirim data ke view dashboard
        return view('dashboard.index', compact ('title', 'description', 'jumlahBuku', 'jumlahMember'));
    }
}
