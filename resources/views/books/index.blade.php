@extends('layouts.app')

@section('title', $title)

@section('content')

<h2>Daftar Buku</h2>
<p>{{ $description }}</p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book['judul'] }}</td>
                <td>{{ $book['penulis'] }}</td>
                <td>{{ $book['tahun_terbit'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection