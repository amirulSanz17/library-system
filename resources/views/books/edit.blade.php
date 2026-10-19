    @extends('layouts.app')
    @section('content')

    <h2>Edit Buku</h2>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label for="title"> Judul Buku </label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}">
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="category_id"> Kategori Buku </label>
            <select name="category_id" id="category_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
                {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="author"> Penulis </label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}">
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="year"> Tahun Terbit </label>
            <input type="text" name="year" value="{{ old('year', $book->year) }}">
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="stock"> Stok Buku </label>
            <input type="text" name="stock" value="{{ old('stock', $book->stock) }}">
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">
            Update
        </button>
    </form>
    @endsection