<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Menambpilkan daftar member
        public function index()
    {
        return view('members.index');
    }
}
