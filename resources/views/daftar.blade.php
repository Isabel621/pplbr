<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/Daftar.css') }}">
</head>

<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="../HTML/ProyekDanaCustomer.html">Proyek dana</a></li>
                <li><a href="../HTML/ProyekDanaCustomer.html">Sewa lahan</a></li>
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

    <div class="t1">
        Daftarkan akun anda,<br>Sebagai Customer atau sebagai Mitra.
    </div>

    <div class="t2">
        Pilih jenis akun
    </div>

    <div class="pilihan">
        <a href="{{ route('customer.daftar') }}" class="kotak">
            <div class="box1">
                <img src="{{ asset('assets/images/salary.png') }}" height="120px" alt="" class="pic">
                <div>Customer</div>
            </div>
        </a>
        <a href="{{ route('mitra.daftar') }}" class="kotak">
            <div class="box2">
                <img src="{{ asset('assets/images/fisherman.png') }}" height="120px" alt="" class="pic">
                <div>Mitra</div>
            </div>
        </a>
    </div>

    <div class="t3">
        Sudah memiliki akun? <a href="../HTML/Login.html" class="t4">Masuk sekarang</a>
    </div>





</body>

</html>
