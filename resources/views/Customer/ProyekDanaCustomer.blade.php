<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Dana Customer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/ProyekDanaCustomer.css')}}">
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

    {{-- <div class="card text-white text-center">
        <img class="card-img" src="{{ asset('assets/images/kotak.png') }}" alt="Card image">
        <div class="card-img-overlay">

            <h1 class="card-text pt-5">Lakukan Sewa Lahan, untuk memulai usaha</h1>


        </div>
    </div> --}}
    <div class="top" style="background-image: url(../assets/images/tambak.png);">
        <div class="topText">Lakukan proyek dana, untuk mendapatkan profit</div>
    </div>

    <div class="badan">
        <div class="judul">
            <div style="margin: 10px 0px;">
                Proyek Dana
            </div>
        </div>

        <div class="list">
            @foreach ($proyekdana_customer as $proyek)
            <div class="listProyek">

                <img src="{{ url('uploads/proyekdana/' . $proyek->gambar) }}" alt="">

                <h5><a style="color:black"
                    href="{{ route('ProyekDana.detail', ['id' => $proyek->id]) }}">{{ $proyek->namaproyek }}</a></h5>
                <div class="profit">
                    <p>Profit
                        {{ $proyek->profit }}
                    </p>

                </div>
                <div class="tenor">
                    <p>Tenor
                        {{ $proyek->tenor }}
                    </p>

                </div>

                <a href="{{ url('/detailProyek'.$proyek->id)}}" class="tombol">
                    <div class="box">
                        <div>Detail</div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>




    </div>

</body>
</html>
