@extends('layouts.app')

@section('title', $title)

@section('content')

<h2>Daftar Member Perpustakaan</h2>
<p>{{ $description }}</p>

    @if (session('success'))
        <p> {{ session('success') }}<p>
    @endif

<a href="{{ route ('members.create') }}">Tambah Member Perpustakaan</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th> Nama <th>
            <th> Email <th>
            <th> Alamat <th>
            <th> Aksi <th>
        </tr>
    </thead>

    <tbody>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->name }}<td>
            <td>{{ $member->email }}<td>
            <td>{{ $member->address }}<td>
            <td>
                <a href="{{ route('members.edit', $member) }}">Edit</a> |
                <form action="{{ route('members.destroy', $member) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
            @endforeach
    </tbody>
</table>
@endsection

