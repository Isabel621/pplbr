<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('assets/css//Dashboard.css') }}">
</head>

<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
        </a>
        <nav class="nav">

        </nav>
        <nav class="nav2">
            <ul>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>

    <div class="top" style="background-image: url(../assets/images/tambakk.png);">
        <div class="topText">
            <div><img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 300px;"></div>
            <span>Platform untuk pendanaan dan sewa lahan perairan tambak</span>
        </div>
    </div>



    <div class="bg">
        <div class="t1">
            Fitur Kami
        </div>

        <div class="pilihan">
            <div class="box1">
                <img src="{{ asset('assets/images/profits.png') }}" height="120px" alt="" class="pic">
                <div>
                    Proyek Dana
                </div>
            </div>
            <div class="box1">
                <img src="{{ asset('assets/images/lake.png') }}" height="120px" alt="" class="pic">
                <div>Sewa Lahan</div>
            </div>
        </div>
    </div>

    <div class="bg1">
        <div>
            <h1>Manfaat memberi pendanaan di TAMBAK.KU</h1>
            <div style="border-left: 8px solid #f6f6f6;padding-left: 10px;">
                <h3>
                    Proses mudah dilakukan
                </h3>
                <p>
                    Proses pendanaan yang dilakukan mudah dipahami
                </p>
            </div>
            <div style="border-left: 8px solid #f6f6f6;padding-left: 10px;">
                <h3>
                    Berdampak sosial
                </h3>
                <p>
                    Membantu para nelayan tambak untuk mendapatkan modal usaha tambak
                </p>
            </div>
            <div style="border-left: 8px solid #f6f6f6;padding-left: 10px;">
                <h3>
                    Menghasilkan Profit
                </h3>
                <p>
                    Mendapatkan profit setiap proyek dana
                </p>
            </div>
            <button class="btn">
                Lakukan sekarang
            </button>
        </div>
    </div>

    <div class="bg2">
        <div>
            <h1>Manfaat melakukan sewa lahan di TAMBAK.KU</h1>
            <div style="border-left: 8px solid #0077B6;padding-left: 10px;">
                <h3>
                    Proses mudah dilakukan
                </h3>
                <p>
                    Proses sewa lahan yang dilakukan mudah dipahami
                </p>
            </div>
            <div style="border-left: 8px solid #0077B6;padding-left: 10px;">
                <h3>
                    Banyak pilihan
                </h3>
                <p>
                    Banyak pilihan lahan yang dapat disewa
                </p>
            </div>
            <div style="border-left: 8px solid #0077B6;padding-left: 10px;">
                <h3>
                    Membuka usaha
                </h3>
                <p>
                    Lahan yang disewa dapat digunakan untuk usaha perairan
                </p>
            </div>
            <button class="btn">
                Lakukan sekarang
            </button>
        </div>
    </div>


</body>

</html>
