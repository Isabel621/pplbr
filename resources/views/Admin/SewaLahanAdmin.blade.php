<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Lahan Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/SewaLahanAdmin.css')}}">
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
                <li><a href="../HTML/ProyekDanaAdmin.html">Proyek dana</a></li>
                <li><a href="../HTML/SewaLahanAdmin.html">Sewa lahan</a></li>
                <li><a href="../HTML/CapaianAdmin.html">Capaian</a></li>
                <li><a href="../HTML/EdukasiAdmin.html">Edukasi</a></li>
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
                            <a href="../HTML/CekAkun.html">Pengguna</a>
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
            <a href="../HTML/KonfirmasiSewaLahan.html">
                <button class="konfirm">
                    Menunggu Konfirmasi
                </button>
            </a>
        </div>

        <div>
            <table align="center">
                <tr>
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Luas</th>
                  <th>Durasi</th>
                  <th>Deskripsi</th>
                  <th>Harga Sewa</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3525015201880002</td>
                    <td>10x10 m</td>
                    <td>6 bulan</td>
                    <td>berlokasi di Jl. Sriti 138, Jember, Jawa Timur</td>
                    <td>15.500.000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3525015201880002</td>
                    <td>10x10 m</td>
                    <td>6 bulan</td>
                    <td>berlokasi di Jl. Sriti 138, Jember, Jawa Timur</td>
                    <td>15.500.000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3525015201880002</td>
                    <td>10x10 m</td>
                    <td>6 bulan</td>
                    <td>berlokasi di Jl. Sriti 138, Jember, Jawa Timur</td>
                    <td>15.500.000</td>
                  </tr>
              </table>
        </div>
    </div>
</body>
</html>
