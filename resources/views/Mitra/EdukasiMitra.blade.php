<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/EdukasiMitra.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
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

    <div class="badan">
        <div class="judul">
            <div>
                Edukasi
            </div>
            <a href="{{ url('/tambah-edukasi-mitra') }}">
                <div class="tambah">
                    Tambah
                </div>
            </a>
        </div>

        <div>
            <table align="center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($edukasi as $edu)
                        <tr onclick="location.href='{{ url('/' . $edu->id) }}'">
                            <td>{{ $edu->id }}</td>
                            <td>{{ $edu->judul }}</td>
                            <td>
                                <img src="{{ asset('uploads/edukasi/' . $edu->gambar) }}" width="50px" height="50px"
                                    alt="">
                            </td>
                        <td>{{ $edu->deskripsi}}</td>

                            <td>
                                <a href="{{ url('/edit-edukasi-mitra' . $edu->id) }}" class="tEdit">Edit</a>
                                <a href="{{ url('/hapus-edukasi-mitra' . $edu->id) }}" class="tHapus">Hapus</a>
                                {{-- <a href="{{ url('/detailProyek'.$item->id)}}" class="tLihat">Lihat</a> --}}

                            </td>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
