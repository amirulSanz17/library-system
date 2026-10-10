<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // Menampilkan daftar member
    public function index()
    {
        $title = "Daftar Member Perpustakaan";
        $description = "Berikut adalah daftar member perpustakaan";
        $members = Member::all();

        return view('members.index', compact ('title', 'description', 'members'));
    }

    // Menampilkan Form Tambah Member
    public function create()
    {
        return view('members.create');
    }

    // Menyimpan Data Member Baru
    public function store(Request $request)
    {
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect()->route('members.index');
    }

    // Menampilkan Form Edit Member
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    // Menyimpan Perubahan Data Member
    public function update(Request $request, Member $member)
    {   
        $member->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect()->route('members.index');
    }

    // Menghapus Data Member
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }
}
