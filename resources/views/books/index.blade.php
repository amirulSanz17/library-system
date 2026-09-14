@extends('layouts.app')

@section('title', $title)

@section('content')

<ul>
    <h2> Daftar Buku </h2>
    @foreach ($books as $book)
        <li>{{ $book }} </li>
    @endforeach
</ul>
@endsection