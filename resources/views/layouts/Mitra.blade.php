<header class="head">
    <a href="">
        <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
    </a>
    <nav class="nav">
        <ul>
            {{-- <li><a href="{{ url('/dashboard')}}">Beranda</a></li> --}}
            <li><a href="{{ url('/proyekdana-mitra')}}">Proyek dana</a></li>
            <li><a href="{{ url('/sewalahan-mitra')}}">Sewa lahan</a></li>
            <li><a href="#">Capaian</a></li>
            <li><a href="{{ url('/edukasi-mitra')}}">Edukasi</a></li>
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
                      <a href="{{ url('/login')}}">Keluar</a>
                    </div>
                  </div>
            </li>
        </ul>
    </nav>
</header>

@yield('main-content')
