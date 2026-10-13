@extends('layouts.app')

@section('title', $title)

@section('content')

<h2> Daftar Kategori Buku</h2>
<p>{{ $description }} <p> 

<a href=/categories>Tambah Buku</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th> Nama Kategori <th>
            <th> Deskrripsi <th>
            <th> Aksi<th>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}<td>
            <td>{{ $category->description }}<td>
            <td>
                <a href="/edit">Edit</a> |
                <form action="/hapus" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
            @endforeach
    </tbody>
</table>

@endsection