<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    @stack('css')
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>

<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="../HTML/ProyekDanaMitra.html">Proyek dana</a></li>
                <li><a href="../HTML/SewaLahanMitra.html">Sewa lahan</a></li>
                <li><a href="../HTML/../HTML/CapaianMitra.html">Capaian</a></li>
                <li><a href="../HTML/EdukasiMitra.html">Edukasi</a></li>
            </ul>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="../HTML/Login.html">Masuk</a></li>
                <li>|</li>
                <li><a href="../HTML/Daftar.html">Daftar</a></li>
                @auth
                    <li><a href="/logout">Logout</a></li>
                @endauth
            </ul>
        </nav>
    </header>
    @yield('content')

</body>

</html>
