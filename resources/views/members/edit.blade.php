@extends('layouts.app')
@section('content')

<h2>Edit Member Perpustakaan</h2>
<form action="{{ route('members.update', $member) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <input type="text" name="name" value="{{ old('name', $member->name) }}">
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="text" name="email" value="{{ old('email', $member->email) }}">
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="text" name="address" value="{{ old('address', $member->address) }}">
        @error('address')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">
        Update
    </button>
</form>
@endsection