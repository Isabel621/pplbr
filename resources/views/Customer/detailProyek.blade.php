<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Proyek</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/detailProyek.css') }}">
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
        <a href="../HTML/ProyekDanaCustomer.html">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="badan">
        <div class="gambar">
            <img src="{{ asset('uploads/proyekdana/' . $detailpr->gambar) }}" alt="">
        </div>

        <div class="desk">
            <h1 class="judul">{{ $detailpr->namaproyek }}</h1>
            {{-- <div style="margin: 20px 0px 10px 0px;">
                    Budidaya ikan nila
                </div> --}}
            <textarea name="" id="deskripsi" cols="auto" rows="10">
                {{ $detailpr->deskripsi }}
            </textarea>

                    {{-- ed risus augue, efficitur vel mauris id, pretium pharetra augue. Sed lobortis sapien quis justo ullamcorper,
                        vitae maximus ipsum tincidunt. Mauris nec bibendum tortor. Praesent volutpat odio in magna accumsan ultrices.
                        Sed vitae ante pulvinar, scelerisque ipsum ac, rhoncus lacus. Aliquam accumsan pretium facilisis.
                        Sed volutpat tellus vel lacus sodales tincidunt. Praesent vel ligula vel ipsum sollicitudin interdum at eget nisi.
                        Nam rhoncus nisi eget mauris faucibus, ut ornare tortor semper. Vestibulum pretium ex vitae nisi ultrices, rutrum feugiat metus posuere.
                        Nunc ullamcorper mauris ut orci eleifend, eget faucibus dui consectetur.
                        Nullam tempor lobortis tortor vitae interdum. Maecenas a pretium risus, vitae fringilla urna. --}}
        </div>



    <div class="detail">
        <div class="subdetail">
            <div style="margin: 10px 0px;">
                Detail Proyek dana
            </div>
        </div>

        <table align="center">
            <tr>
                <td>Profit</td>
                <th>{{ $detailpr->profit }}</th>
            </tr>
            <tr>
                <td>Tenor</td>
                <th>{{ $detailpr->tenor }}</th>
            </tr>
            <tr>
                <td>Limit</td>
                <th>{{ $detailpr->limit }}</th>
            </tr>
            <tr>
                <td>Dana Proyek</td>
                <th>{{ $detailpr->dana }}</th>
            </tr>
        </table>

    </div>

    <div class="submit">
        <a href=" {{ url('/tambahkan-kontrak-proyek-dana/' . $detailpr->id)}}">

            <input type="submit" value="Danai Sekarang">
        </a>
    </div>
    </div>


</body>

</html>
