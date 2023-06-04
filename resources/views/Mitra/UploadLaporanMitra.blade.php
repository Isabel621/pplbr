<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Mitra</title>
    <link rel="stylesheet" href="../CSS/UploadLaporanMitra.css">
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
                <li><a href="../HTML/CapaianMitra.html">Capaian</a></li>
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
        <a href="../HTML/LaporanMitra.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>
    
    <div class="box">
        <div class="sub">
            <p>Upload Laporan</p>
        </div>

        <form>
            <div class="form">
                <label for="">Upload Bukti</label>
                <p class="image_upload">
                    <label for="userImage">
                    <a class="gambar" ><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                    </label>
                    <input type="file" name="userImage" id="userImage">
                </p>

                <label for="">Deskripsi</label><br>
                <textarea name="" id="desk" rows="10"></textarea>

                <div class="submit">
                    <input type="submit" value="Upload">
                </div>

            </div>
          </form>

    </div>
</body>
</html>