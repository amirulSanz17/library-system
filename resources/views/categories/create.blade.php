@extends('layouts.app')
@section('content')

<h2>Menambah Kategori Buku Perpustakaan</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="category"> Kategori Buku </label>
        <input 
            type="text" 
            name="name"
            placeholder="Kategori Buku"
            value="{{ old('name') }}"
        >
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">
        Simpan
    </button>
</form>

@endsection