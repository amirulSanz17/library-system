@extends('layouts.app')

@section('title', 'Daftar Peminjaman')

@section('content')
    <h2>Daftar Peminjaman Buku</h2>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('borrowings.create') }}">Catat Peminjaman Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Member</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($borrowings as $index => $borrowing)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $borrowing->member->name }}</td>
                    <td>{{ $borrowing->book->title }}</td>
                    <td>{{ $borrowing->borrow_date }}</td>
                    <td>{{ $borrowing->return_date }}</td>
                    <td>
                        @if ($borrowing->status === 'borrowed')
                            <span style="color: red;">Dipinjam</span>
                        @else
                            <span style="color: green;">Dikembalikan</span>
                        @endif
                    </td>
                    <td>
                    <a href="{{ route('borrowings.edit', $borrowing) }}">Edit</a> |
                        <form action="{{ route('borrowings.destroy', $borrowing) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Belum ada data peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection