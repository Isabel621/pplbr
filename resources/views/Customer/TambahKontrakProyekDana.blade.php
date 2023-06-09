<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Dana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/TambahKontrakProyekDana.css')}}">
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
                          <a href="#">Keluar</a>
                        </div>
                      </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="kembali">
        <a href="{{ url('/detailProyek'.$tambahproyek->id)}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="badan">
        <div class="judul">
            <div style="margin: 10px 0px;">
                Kontrak Proyek Dana
            </div>
        </div>

        <div class="listProyek">

            <div class="nproyek">
                {{ $tambahproyek->namaproyek }}
            </div>

            <div class="detail">
                <table align="center">
                    <tr>
                      <td>Profit</td>
                      <th>{{ $tambahproyek->profit }}</th>
                    </tr>
                    <tr>
                      <td>Tenor</td>
                      <th>{{ $tambahproyek->tenor }}</th>
                    </tr>
                    <tr>
                      <td>Limit</td>
                      <th>{{ $tambahproyek->limit }}</th>
                    </tr>
                    <tr>
                        <td>Dana Proyek</td>
                        <th>{{ $tambahproyek->dana }}</th>
                      </tr>
                  </table>

            </div>

            <div class="line">
                <label for="">Saya menyetujui
                    <a href="" class="snk">syarat & ketentuan</a>
                     proyek dana
                    <input type="checkbox" class="my-checkbox" value="1" />
                </label>
            </div>

            <div class="submit">
                <a href="">
                    <input type="submit" value="Buat Kontrak">
                </a>
            </div>

    </div>
</body>
</html>
