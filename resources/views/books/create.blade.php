@extends('layouts.app')
@section('content')

<h2>Menambah Buku Perpustakaan</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        <label for="title"> Judul Buku </label>
        <input 
            type="text" 
            name="title"
            placeholder="Judul Buku"
            value="{{ old('title') }}"
            >
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
    </div>
    <div>
        <label for="author"> Penulis Buku </label>
        <input 
            type="text" 
            name="author"
            placeholder="Penulis Buku"
            value="{{ old('author') }}"
            >
        
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
    </div>

    <div>
        <label for="year"> Tahun Terbit </label>
        <input 
            type="integer" 
            name="year"
            placeholder="Tahun Terbit"
            value="{{ old('year') }}"
            >
        
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
    </div>

    <div>
        <label for="stock"> Stok Buku </label>
        <input 
        type="text" 
        name="stock"
        placeholder="Stok Buku"
        value="{{ old('stock') }}"
        >
        @error('stock')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">
        Simpan
    </button>
</form>

@endsection