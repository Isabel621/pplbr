<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontrak Sewa Lahan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/TambahKontrakSewaLahan.css')}}">
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
                <li><a href="#">Capaian</a></li>
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
        <a href="{{ url('/detailSewaLahan'.$tambahsewa->id)}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="badan">
        <div class="judul">
            <div style="margin: 10px 0px;">
                Kontrak Sewa Lahan
            </div>
        </div>

        <div class="listProyek">

            <div class="nproyek">
                <th>{{ $tambahsewa->namalahan }}</th>
            </div>

            <div class="detail">
                <table align="center">
                    <tr>
                      <td>Nama Lahan</td>
                      <th>{{ $tambahsewa->namalahan }}</th>
                    </tr>
                    <tr>
                      <td>Luas</td>
                      <th>{{ $tambahsewa->luas }}</th>

                    </tr>
                    <tr>
                      <td>Durasi</td>
                      <th>{{ $tambahsewa->durasi}}</th>

                    </tr>
                    <tr>
                        <td>Harga Sewa</td>
                        <th>{{ $tambahsewa->hargasewa }}</th>

                      </tr>
                  </table>

            </div>

            <div class="line">
                <label for="">Saya menyetujui
                    <a href="" class="snk">syarat & ketentuan</a>
                     sewa lahan
                    <input type="checkbox" class="my-checkbox" value="1" />
                </label>
            </div>

            <div class="submit">
                <a href="">
                    <input type="submit" value="Buat Kontrak">
                </a>
            </div>
        </div>


    </div>
</body>
</html>
