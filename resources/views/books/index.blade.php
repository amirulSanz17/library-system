@extends('layouts.app')

@section('title', $title)

@section('content')

    @if (session('success'))
        <p> {{ session('success') }}<p>
    @endif

<h2>Daftar Buku</h2>
<p>{{ $description }}</p>

<a href="{{ route ('books.create') }}">Tambah Buku</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th> Judul <th>
            <th> Kategori Buku <th>
            <th> Penulis <th>
            <th> Tahun Terbit<th>
            <th> Stok<th>
            <th> Aksi<th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}<td>
            <td>{{ $book->category->name }}<td>
            <td>{{ $book->author }}<td>
            <td>{{ $book->year }}<td>
            <td>{{ $book->stock }}<td>
            <td>
                <a href="{{ route('books.edit', $book) }}">Edit</a> |
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
            @endforeach
    </tbody>
</table>

@endsection

