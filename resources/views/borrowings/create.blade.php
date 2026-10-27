@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <h2>Form Peminjaman Buku Baru</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <!-- Dropdown Pilih Member -->
        <div style="margin-bottom: 15px;">
            <label for="member_id">Pilih Member:</label><br>
            <select name="member_id" id="member_id" required>
                <option value="">-- Pilih Member --</option>
                @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }} ({{ $member->email }})</option>
                @endforeach
            </select>
        </div>

        <!-- Dropdown Pilih Buku -->
        <div style="margin-bottom: 15px;">
            <label for="book_id">Pilih Buku:</label><br>
            <select name="book_id" id="book_id" required>
                <option value="">-- Pilih Buku --</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }} (Stok: {{ $book->stock }})</option>
                @endforeach
            </select>
        </div>

        <!-- Input Tanggal Pinjam -->
        <div style="margin-bottom: 15px;">
            <label for="borrow_date">Tanggal Pinjam:</label><br>
            <input type="date" name="borrow_date" id="borrow_date" value="{{ date('Y-m-d') }}" required>
        </div>

        <!-- Input Tanggal Kembali -->
        <div style="margin-bottom: 15px;">
            <label for="return_date">Tanggal Kembali:</label><br>
            <input type="date" name="return_date" id="return_date" required>
        </div>

        <button type="submit">Simpan Peminjaman</button>
        <a href="{{ route('borrowings.index') }}">Batal</a>
    </form>
@endsection