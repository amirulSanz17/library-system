@extends('layouts.app')
@section('content')
<h2>Menambah Member Perpustakaan</h2>

<form action="{{ route('members.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nama Member">
    <input type="text" name="email" placeholder="Email Member">
    <input type="text" name="address" placeholder="Alamat Member">

    <button type="submit">
        Simpan
    </button>
</form>

@endsection