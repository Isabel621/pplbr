<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sewa Lahan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/EditSewaLahan.css')}}">
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
        <a href="{{ url('/sewalahan-mitra')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Edit Sewa Lahan</p>
        </div>

        <form action="{{ url('/update-sewalahan-mitra'.$sewalahan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form">
                <label for="">Nama Pemilik</label><br>
                <input type="text" name="namapemilik" class="form-control" value="{{ $sewalahan->namapemilik}}">

                <label for="">Nama Lahan</label><br>
                <input type="text" name="namalahan" class="form-control" value="{{ $sewalahan->namalahan}}">

                <label for="">Luas</label><br>
                <input type="text" name="luas" class="form-control" value="{{ $sewalahan->luas}}">

                <label for="">Durasi</label><br>
                <input type="text" name="durasi" class="form-control" value="{{ $sewalahan->durasi}}">

                <label for="">Gambar</label>
                <p class="image_upload">
                    <label for="userImage">
                    <a class="gambar" ><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                    </label>
                    <input type="file" name="gambar" class="form-control" id="userImage" value="{{ $sewalahan->gambar}}">
                </p>

                <label for="">Deskripsi</label><br>
                <textarea name="deskripsi" id="desk" rows="10" class="form-control">{{ $sewalahan->deskripsi}}</textarea>

                <label for="">Harga Sewa</label><br>
                <input type="text" name="hargasewa" class="form-control" value="{{ $sewalahan->hargasewa}}">


                <div class="submit">
                    <input type="submit" value="Simpan">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
