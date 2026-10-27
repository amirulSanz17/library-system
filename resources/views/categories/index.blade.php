@extends('layouts.app')

@section('title', $title)

@section('content')

<h2> Daftar Kategori Buku</h2>
<p>{{ $description }} <p> 

<a href="{{ route ('categories.create') }}"">Tambah Buku</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th> Nama Kategori <th>
            <th> Aksi<th>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}<td>
            <td>
                <a href="{{ route('categories.edit', $category) }}">Edit</a> |
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
            @endforeach
    </tbody>
</table>

@endsection