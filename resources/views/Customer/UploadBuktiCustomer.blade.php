<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Customer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/UploadBuktiCustomer.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
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
                <li><a href="../HTML/SewaLahanCustomer.html">Sewa lahan</a></li>
                <li><a href="../HTML/CapaianCustomer.html">Capaian</a></li>
                <li><a href="../HTML/EdukasiCustomer.html">Edukasi</a></li>
            </ul>
        </nav>
        <nav class="nav2">
            <ul>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">
                            <span class="fa fa-user"></span>
                        </button>
                        <div class="dropdown-content">
                            <a href="../HTML/ProfilCustomer.html">Profil</a>
                            <a href="../HTML/Login.html">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="kembali">
        <a href="{{ url('/customer/capaian') }}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Upload Bukti Pembayaran</p>
        </div>

        @if ($tipe == 'kontrak-proyek-dana')
            <form action="{{ url('/customer/capaian/kontrak-proyek-dana/' . $id . '/upload-bukti') }}" method="POST" enctype="multipart/form-data">
        @else
            <form action="{{ url('/customer/capaian/kontrak-sewa-lahan/' . $id . '/upload-bukti') }}"
                    method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <div class="form">
            <label for="">Upload Bukti</label>
            <p class="image_upload">
                <label for="bukti">
                    <a class="gambar"><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                </label>
                <input type="file" name="bukti" id="bukti">
            </p>

            <div class="submit">
                <input type="submit" value="Upload">
            </div>

        </div>
        @dd($tipe)

        </form>

    </div>
</body>

</html>
