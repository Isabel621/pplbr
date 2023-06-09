<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sewa Lahan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/detailSewaLahan.css') }}">
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
                          <a href="../HTML/Login.html">Keluar</a>
                        </div>
                      </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="kembali">
        <a href="../HTML/SewaLahanCustomer.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="badan">
        <div class="gambar">
            <img src="/Gambar/nila.png" alt="">
        </div>

        <div class="desk">
            <div class="gambar">
                <img src="{{ url('uploads/sewalahan/' . $detailsl->gambar) }}" alt="">
            </div>
            <div class="judul">
                <h1 class="judul">{{ $detailsl->namaproyek }}</h1>
            </div>
            <textarea name="" id="deskripsi" cols="auto" rows="10">
                {{ $detailsl->deskripsi }}
            </textarea>
        </div>

        <div class="detail">
            <div class="subdetail">
                <div style="margin: 10px 0px;">
                    Detail Sewa Lahan
                </div>
            </div>

            <table align="center">
                <tr>
                  <td>Luas</td>
                  <th>10x10 m</th>
                </tr>
                <tr>
                  <td>Durasi</td>
                  <th>6 bulan</th>
                </tr>
                <tr>
                    <td>Harga Sewa</td>
                    <th>15.500.000</th>
                  </tr>
              </table>

        </div>

        <div class="submit">
            <a href="../HTML/TambahKontrakSewaLahan.html">
                <input type="submit" value="Sewa Sekarang">
            </a>
        </div>
    </div>


</body>
</html>
