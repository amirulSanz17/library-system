@extends('layouts.app')

@section('title', $title)

@section('content')

<ul>
    <h2> Daftar Member Perpustakaan</h2>
    @foreach ($members as $members)
        <li>{{ $members }} </li>
    @endforeach
</ul>
@endsection

