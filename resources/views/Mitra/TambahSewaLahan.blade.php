<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sewa Lahan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/TambahSewaLahan.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
    <header class="head">
        <a href="">
            <img src="/Gambar/logo.png" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="../HTML/ProyekDanaMitra.html">Proyek dana</a></li>
                <li><a href="../HTML/SewaLahanMitra.html">Sewa lahan</a></li>
                <li><a href="#">Capaian</a></li>
                <li><a href="../HTML/EdukasiMitra.html">Edukasi</a></li>
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
                          <a href="../HTML/ProfilMitra.html">Profil</a>
                          <a href="../HTML/Login.html">Keluar</a>
                        </div>
                      </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="kembali">
        <a href="{{ url('/sewalahan-mitra') }}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Tambah Sewa Lahan</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ url('/tambah-sewalahan-mitra') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Pemilik</label><br>
                <input type="text" name="namapemilik" class="form-control" placeholder="Nama Pemilik...">

                <label for="">Nama Lahan</label><br>
                <input type="text" name="namalahan" class="form-control" placeholder="Nama Lahan...">

                <label for="">Luas</label><br>
                <input type="text" name="luas" class="form-control" placeholder="Luas...">

                <label for="">Durasi</label><br>
                <input type="text" name="durasi" class="form-control" placeholder="Durasi...">

                <label for="">Gambar</label>
                <p class="image_upload">
                    <label for="userImage">
                    <a class="gambar" ><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                    </label>
                    <input type="file" name="gambar" class="form-control" id="userImage">
                </p>

                <label for="">Deskripsi</label><br>
                <textarea name="deskripsi" class="form-control" id="desk" rows="10"></textarea>

                <label for="">Harga Sewa</label><br>
                <input type="text" name="hargasewa" class="form-control" placeholder="Harga Sewa...">

                <div class="submit">
                    <input type="submit" value="Tambah">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
