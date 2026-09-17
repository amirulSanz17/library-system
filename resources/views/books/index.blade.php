@extends('layouts.app')

@section('title', $title)

@section('content')

<h2>Daftar Buku</h2>
<p>{{ $description }}</p>

<ul>
    @foreach ($books as $index => $book)
        <li>
            <b>{{ $book['judul'] }}</b><br>
            Penulis: {{ $book['penulis'] }}<br>
            Tahun Terbit: {{ $book['tahun_terbit'] }}
        </li>
        <br>
    @endforeach
</ul>

@endsection