@extends('layouts.app')

@section('title', $title)

@section('content')

<h2>Daftar Buku</h2>
<p>{{ $description }}</p>

<ul>
    @foreach ($books as $index => $book)
        <li>
            <b>{{ $book->title }}</b><br>
            Penulis: {{ $book->author }}<br>
            Tahun Terbit: {{ $book->year }}
            stok: {{ $book->stock }}
        </li>
        <br>
    @endforeach
</ul>

@endsection