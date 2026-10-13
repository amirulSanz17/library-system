@extends('layouts.app')
@section('content')
<h2>Menambah Member Perpustakaan</h2>

<form action="{{ route('members.store') }}" method="POST">
    @csrf

    <div>
    <input type="text" name="name" placeholder="Nama Member" value ="{{ old('name') }}">
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
    <input type="text" name="email" placeholder="Email" value ="{{ old('email') }}">
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
    <input type="text" name="address" placeholder="Alamat" value ="{{ old('address') }}">
        @error('address')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">
        Simpan
    </button>
</form>

@endsection