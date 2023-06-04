<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Customer</title>
    <link rel="stylesheet" href="../CSS/LaporanCustomer.css">
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
                <li><a href="../HTML/../HTML/CapaianCustomer.html">Capaian</a></li>
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
        <a href="../HTML/CapaianBerlangsungCustomer.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="badan">
        <div class="judul">
            <div style="margin: 10px 0px;">
                Laporan Proyek Dana
            </div>
        </div>
    
        <div>
            <table align="center">
                <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><img src="/Gambar/nila.png" alt="" class="gmbr"></td>
                    <td>pemberian pakan</td>
                    <td>20/03/2023</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/Gambar/nila.png" alt="" class="gmbr"></td>
                    <td>pengecekan air tambak</td>
                    <td>20/03/2023</td>
                </tr>
              </table>
        </div>
    </div>
</body>
</html>