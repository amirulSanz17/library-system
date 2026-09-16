@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1> {{ $title }} </h1>
    <p> {{ $description }} </p>

    <h2>Jumlah Buku</h2>
    <p> {{ $jumlahBuku }} </p>

    <h2>Jumlah Member</h2>
    <p> {{ $jumlahMember }} </p>

@endsection