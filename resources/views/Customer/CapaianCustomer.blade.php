<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capaian Customer</title>
    <link rel="stylesheet" href="../CSS/CapaianCustomer.css">
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

    <div class="menu">
        <div class="judulmenu">
            <div>
                Capaian
            </div>
            <div>
                <a href="../HTML/CapaianCustomer.html">
                    <button class="konfirm">
                        Menunggu Konfirmasi
                    </button>
                </a>
                <a href="../HTML/CapaianBerlangsungCustomer.html">
                    <button class="konfirm">
                        Sedang Berlangsung
                    </button>
                </a>
                <a href="../HTML/CapaianSelesaiCustomer.html">
                    <button class="konfirm">
                        Selesai
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="badan">
        <div class="judul">
            <div style="margin: 10px 0px;">
                Kontrak Proyek Dana
            </div>
        </div>
    
        <div>
            <table align="center">
                <tr>
                  <th>ID</th>
                  <th>Nama Proyek</th>
                  <th>Profit</th>
                  <th>Tenor</th>
                  <th>Dana</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Budidaya lele</td>
                    <td>20%</td>
                    <td>6 Bulan</td>
                    <td>1.500.000</td>
                    <td>20/03/2023</td>
                    <td>
                        <a href="../HTML/UploadBuktiCustomer.html">
                            <button class="tKonfirmasi">
                                Bayar
                            </button>
                        </a>
                        <button class="tTolak">
                            Batalkan
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Budidaya lele</td>
                    <td>20%</td>
                    <td>6 Bulan</td>
                    <td>1.500.000</td>
                    <td>20/03/2023</td>
                    <td>
                        <a href="../HTML/UploadBuktiCustomer.html">
                            <button class="tKonfirmasi">
                                Bayar
                            </button>
                        </a>
                        <button class="tTolak">
                            Batalkan
                        </button>
                    </td>
                </tr>
              </table>
        </div>

        <div class="badan">
            <div class="judul">
                <div style="margin: 10px 0px;">
                    Kontrak Sewa Lahan
                </div>
            </div>
        
            <div>
                <table align="center">
                    <tr>
                      <th>ID</th>
                      <th>Nama Lahan</th>
                      <th>Luas</th>
                      <th>Durasi</th>
                      <th>Harga Sewa</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lahan A</td>
                        <td>10m x 10m</td>
                        <td>6 Bulan</td>
                        <td>15.000.000</td>
                        <td>20/03/2023</td>
                        <td>
                            <a href="../HTML/UploadBuktiCustomer.html">
                                <button class="tKonfirmasi">
                                    Bayar
                                </button>
                            </a>
                            <button class="tTolak">
                                Batalkan
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lahan A</td>
                        <td>10m x 10m</td>
                        <td>6 Bulan</td>
                        <td>15.000.000</td>
                        <td>20/03/2023</td>
                        <td>
                            <a href="../HTML/UploadBuktiCustomer.html">
                                <button class="tKonfirmasi">
                                    Bayar
                                </button>
                            </a>
                            <button class="tTolak">
                                Batalkan
                            </button>
                        </td>
                    </tr>
                  </table>
            </div>
    </div>
</body>
</html>