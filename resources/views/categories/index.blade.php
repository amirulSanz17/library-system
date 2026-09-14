@extends('layouts.app')

@section('title', $title)

@section('content')

<ul>
    <h2> Daftar Kategori Buku</h2>
    @foreach ($categories as $categories)
        <li>{{ $categories }} </li>
    @endforeach
</ul>
@endsection