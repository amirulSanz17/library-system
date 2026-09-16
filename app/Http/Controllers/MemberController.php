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
            'Amirul Ichsandina',
            'Jajang Nur Jaman',
            'Asep Baliho',
            'Nanang Mulyadi'
        ];

        return view('members.index', compact ('title', 'description', 'members'));
    }

    public function show ($id)
    {
        return "ID member: " . $id;
    }
}
