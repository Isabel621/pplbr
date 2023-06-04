<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Lahan Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/SewaLahanMitra.css')}}">
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

    <div class="badan">
        <div class="judul">
            <div>
                Sewa Lahan
            </div>
            <a href="{{ url('/tambah-sewalahan-mitra')}}">
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
                  <th>Nama Pemilik</th>
                  <th>Nama Lahan</th>
                  <th>Luas</th>
                  <th>Lokasi</th>
                  <th>Durasi</th>
                  <th>Gambar</th>
                  <th>Deskripsi</th>
                  <th>Harga Sewa</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($sewalahan as $sewa)
                    <tr onclick="location.href='{{ url('/detailSewalahan'.$sewa->id)}}'">
                        <td>{{ $sewa->id}}</td>
                        {{-- <td>{{ $sewa->id}}</td> --}}
                        {{-- <td>{{ $sewa->namamitra}}</td> --}}

                        <td>{{ $sewa->namapemilik}}</td>
                        <td>{{ $sewa->namalahan}}</td>
                        <td>{{ $sewa->luas}}</td>
                        <td>{{ $sewa->lokasi}}</td>
                        <td>{{ $sewa->durasi}}</td>
                        <td>
                            <img src="{{ asset('uploads/sewalahan/'.$sewa->gambar)}}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{ $sewa->deskripsi}}
                            </td>
                        <td>{{ $sewa->hargasewa}}</td>
                        <td>
                            <a href="{{ url('/edit-sewalahan-mitra'.$sewa->id)}}" class="tEdit">Edit</a>
                            <a href="{{ url('/hapus-sewalahan-mitra'.$sewa->id)}}" class="tHapus">Hapus</a>
                            {{-- <a href="{{ url('/detailProyek'.$sewa->id)}}" class="tLihat">Lihat</a> --}}

                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>
