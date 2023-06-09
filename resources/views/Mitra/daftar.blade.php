<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/daftar.css') }}">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
    <header class="head">
        <a href="">
            <img src="/Gambar/logo.png" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="../HTML/ProyekDanaCustomer.html">Proyek dana</a></li>
                <li><a href="../HTML/SewaLahanCustomer.html">Sewa lahan</a></li>
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

    <div class="kembali">
        <a href="../HTML/ProyekDanaCustomer.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="judul">
        <p>Daftarkan akun anda,</p>
        <p>Untuk memulai proyek dana dan sewa lahan</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Daftar Mitra</p>
            <p><a href="../HTML/Login.html" class="masuk">Masuk</a></p>
        </div>

        <form action="{{ route('mitra.daftar.store') }}" method="POST">
            @csrf
            <div class="form">
                <label for="">Nama Lengkap</label><br>
                <input type="text" placeholder="Nama Lengkap..." name="nama_lengkap">

                <label for="">Nama Pengguna</label><br>
                <input type="text" placeholder="Nama Pengguna..." name="nama_pengguna">

                <label for="">Nama Usaha</label><br>
                <input type="text" placeholder="Nama Usaha..." name="nama_usaha">

                <label for="">Email</label><br>
                <input type="text" placeholder="Email..." name="email">

                <label for="">Nomor Telepon</label><br>
                <input type="text" placeholder="Nomor Telepon..." name="nomor_telepon">

                <label for="">Nomor Induk Kependudukan (NIK)</label><br>
                <input type="text" placeholder="Nomor Induk Kependudukan (NIK)..." name="nik">

                <label for="">Alamat</label><br>
                <input type="text" placeholder="Alamat..." name="alamat">

                <div class="alamat">
                    <div>
                        <label for="">Kecamatan</label><br>
                        <input type="text" placeholder="Kecamatan..." name="kecamatan">
                    </div>
                    <div>
                        <label for="">Kota</label><br>
                        <input type="text" placeholder="Kota..." name="kota">
                    </div>
                    <div>
                        <label for="">Provinsi</label><br>
                        <input type="text" placeholder="Provinsi..." name="provinsi">
                    </div>
                </div>

                <div class="rekening">
                    <div>
                        <label for="">Nomor Rekening</label><br>
                        <input type="text" placeholder="Nomor Rekening..." name="nomor_rekening">
                    </div>
                    <div>
                        <label for="">Nama Bank</label><br>
                        <input type="text" placeholder="Nama Bank..." name="nama_bank">
                    </div>
                </div>

                <label for="">Kata Sandi</label><br>
                <input type="password" placeholder="Kata Sandi..." name="password">

                <label for="">Konfirmasi Kata Sandi</label><br>
                <input type="password" placeholder="Konfirmasi Kata Sandi..." name="password_confirmation">

                <div class="submit">
                    <input type="submit" value="Daftar">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
