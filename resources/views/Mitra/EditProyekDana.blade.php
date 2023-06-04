<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek Dana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/EditProyekDana.css')}}">
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
        <a href="{{ url('/proyekdana-mitra')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Edit Proyek Dana</p>
        </div>

        @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

        <form action="{{ url('/update-proyekdana-mitra'.$proyek_dana->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form">
                <label for="">Nama Proyek</label><br>
                <input type="text" name="namaproyek" value="{{ $proyek_dana->namaproyek}}" class="form-control" >

                <label for="">Profit</label><br>
                <input type="text" name="profit" value="{{ $proyek_dana->profit}}" class="form-control">

                <label for="">Tenor</label><br>
                <input type="text" name="tenor" value="{{ $proyek_dana->tenor}}" class="form-control">

                <label for="">Gambar</label>
                <p class="image_upload">
                    <label for="userImage">
                    <a class="gambar" ><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                    </label>
                    <input type="file" name="gambar" id="userImage" value="{{ $proyek_dana->gambar}}" class="form-control">
                </p>

                <label for="">Deskripsi</label><br>
                <textarea name="deskripsi" id="desk" rows="10" class="form-control">{{ $proyek_dana->deskripsi}}</textarea>

                <label for="">Limit</label><br>
                <input type="text" name="limit" value="{{ $proyek_dana->limit}}" class="form-control">

                <label for="">Dana</label><br>
                <input type="text" name="dana" value="{{ $proyek_dana->dana}}" class="form-control">

                <div class="submit">
                    <input type="submit" value="Simpan">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
