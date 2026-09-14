<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
        <hr>
    </header>

    <nav>
        <a href="{{ route('buku') }}">Buku</a> |
        <a href="{{ route('member') }}">Member</a> |
        <a href="{{ route('kategori') }}">Kategori</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    <hr>
    <p>Library System</p>
</footer>

</body>

</html>