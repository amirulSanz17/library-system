<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    //
    public function index()
    {
        $title = "Peminjaman Buku";
        $description = "Silahkan pilih buku dan member untuk melakukan peminjaman buku.";
        $borrowings = Borrowing::with(['member', 'book'])->get();
        
        return view('borrowings.index', compact ('title', 'description', 'borrowings'));
    }

    public function create()
    {
        $members = Member::all();
        $books = Book::where('stock', '>', 0)->get();

        return view('borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
        ]);

        // 1. Simpan data peminjaman
        Borrowing::create([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => 'borrowed',
        ]);

        // 2. Kurangi stok buku
        $book = Book::findOrFail($request->book_id);
        $book->decrement('stock');

        return redirect()->route('borrowings.index')->with('success', 'Peminjaman berhasil disimpan!');
    }

    // Menampilkan Form Edit Buku
    public function edit(Borrowing $borrowing)
    {
        $members = Member::all();
        $books = Book::all();
        return view('borrowings.edit', compact('borrowing', 'members', 'books'));
    }

    // Menyimpan Perubahan Data Peminjaman
    public function update(Request $request, Borrowing $borrowing)
    {   
        $borrowing->update([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
        ]);
        return redirect()->route('borrowings.index');
    }

    // Menghapus Data Peminjaman
    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
        return redirect()->route('borrowings.index');
    }
}
