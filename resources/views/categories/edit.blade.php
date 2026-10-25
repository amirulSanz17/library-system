    @extends('layouts.app')
    @section('content')

    <h2>Edit kategori</h2>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label for="title"> Kategori Buku </label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">
            Update
        </button>
    </form>
    @endsection