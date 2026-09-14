<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Menampilkan daftar member
    public function index()
    {
        $title = "Daftar Member Perpustakaan";
        $description = "Berikut adalah daftar member perpustakaan";
        $members = [
            'Ahmad Fahmi Hidayat',
            'Amirul Ichsandina'
        ];

        return view('members.index', compact ('title', 'description', 'members'));
    }
}
