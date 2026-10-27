@extends('layouts.app')
@section('content')

<h2>Edit Peminjaman</h2>
<form action="{{ route('borrowings.update', $borrowing) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Dropdown Member dari Model -->
    <div style="margin-bottom: 15px;">
        <label for="member_id">Pilih Member:</label><br>
        <select name="member_id" id="member_id" required>
            @foreach ($members as $member)
                <option value="{{ $member->id }}" {{ $borrowing->member_id == $member->id ? 'selected' : '' }}>
                    {{ $member->name }} ({{ $member->email }})
                </option>
            @endforeach
        </select>
    </div>

    <!-- Dropdown Buku dari Model -->
    <div style="margin-bottom: 15px;">
        <label for="book_id">Pilih Buku:</label><br>
        <select name="book_id" id="book_id" required>
            @foreach ($books as $book)
                <option value="{{ $book->id }}" {{ $borrowing->book_id == $book->id ? 'selected' : '' }}>
                    {{ $book->title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Input Tanggal Pinjam -->
    <div style="margin-bottom: 15px;">
        <label for="borrow_date">Tanggal Pinjam:</label><br>
        <input type="date" name="borrow_date" id="borrow_date" value="{{ $borrowing->borrow_date }}">
    </div>

    <!-- Input Tanggal Kembali -->
    <div style="margin-bottom: 15px;">
        <label for="return_date">Tanggal Kembali (Isi jika sudah dikembalikan):</label><br>
        <input type="date" name="return_date" id="return_date" value="{{ $borrowing->return_date }}">
    </div>

    <button type="submit">Update</button>
</form>
@endsection