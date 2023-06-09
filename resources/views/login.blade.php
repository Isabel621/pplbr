<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Proyek dana</a></li>
                <li><a href="#">Sewa lahan</a></li>
                <li><a href="#">Capaian</a></li>
                <li><a href="#">Edukasi</a></li>
            </ul>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="../HTML/Login.html">Masuk</a></li>
                <li>|</li>
                <li><a href="../HTML/Daftar.html">Daftar</a></li>
            </ul>
        </nav>
    </header>

    <div class="judul">
        <p>Masuk akun anda,</p>
        <p>Untuk memulai proyek dana dan sewa lahan</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Masuk</p>
            <p><a href="{{ route('register') }}" class="daftar">Daftar</a></p>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form">
                <label for="">Email</label><br>
                <input type="text" placeholder="Email..." name="email">

                <label for="">Kata Sandi</label><br>
                <input type="password" placeholder="Kata Sandi..." name="password">

                <div class="submit">
                    <input type="submit" value="Masuk">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
