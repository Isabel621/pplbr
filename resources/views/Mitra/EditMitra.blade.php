<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mitra</title>
    <link rel="stylesheet" href="../CSS/EditMitra.css">
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
        <a href="../HTML/ProfilMitra.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Edit Profil</p>
        </div>

        <form>
            <div class="form">
                <label for="">Nama Lengkap</label><br>
                <input type="text" placeholder="Nama Lengkap...">

                <label for="">Nama Pengguna</label><br>
                <input type="text" placeholder="Nama Pengguna...">

                <label for="">Nama Usaha</label><br>
                <input type="text" placeholder="Nama Usaha...">

                <label for="">Email</label><br>
                <input type="text" placeholder="Email...">

                <label for="">Nomor Telepon</label><br>
                <input type="text" placeholder="Nomor Telepon...">

                <label for="">Nomor Induk Kependudukan (NIK)</label><br>
                <input type="text" placeholder="Nomor Induk Kependudukan (NIK)...">

                <label for="">Alamat</label><br>
                <input type="text" placeholder="Alamat...">

                <div class="alamat">
                    <div>
                        <label for="">Kecamatan</label><br>
                        <input type="text" placeholder="Kecamatan...">
                    </div>
                    <div>
                        <label for="">Kota</label><br>
                        <input type="text" placeholder="Kota...">
                    </div>
                    <div>
                        <label for="">Provinsi</label><br>
                        <input type="text" placeholder="Provinsi...">
                    </div>
                </div>

                <div class="rekening">
                    <div>
                        <label for="">Nomor Rekening</label><br>
                        <input type="text" placeholder="Nomor Rekening...">
                    </div>
                    <div>
                        <label for="">Nama Bank</label><br>
                        <input type="text" placeholder="Nama Bank...">
                    </div>
                </div>

                <label for="">Kata Sandi</label><br>
                <input type="password" placeholder="Kata Sandi...">

                <label for="">Konfirmasi Kata Sandi</label><br>
                <input type="password" placeholder="Konfirmasi Kata Sandi...">

                <div class="submit">
                    <input type="submit" value="Simpan">
                </div>

            </div>
          </form>

    </div>
</body>
</html>