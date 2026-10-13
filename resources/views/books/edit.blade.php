@extends('layouts.app')
@section('content')

<h2>Edit Buku</h2>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <input type="text" name="title" value="{{ old('title', $book->title) }}">
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="text" name="author" value="{{ old('author', $book->author) }}">
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="text" name="year" value="{{ old('year', $book->year) }}">
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
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