@extends('layouts.app')

@section('title', $title)

@section('content')

<ul>
    <h2> Daftar Member Perpustakaan</h2>
    @foreach ($members as $member)
        <li>{{ $member }} </li>
    @endforeach
</ul>
@endsection

