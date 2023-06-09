<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capaian Customer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/CapaianCustomer.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('assets/images/logo.png') }}" height="60px" alt="logo" class="logo">
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
                @foreach($kontrakProyekDana as $i => $k)
                <tr>
                    <td>{{ $k->id_proyek_dana }}</td>
                    <td>{{ $k->proyekDana->namaproyek }}</td>
                    <td>{{ $k->proyekDana->profit }}</td>
                    <td>{{ $k->proyekDana->tenor }}</td>
                    <td>{{ $k->proyekDana->dana }}</td>
                    <td>{{ $k->proyekDana->created_at->format('d/m/Y') }}</td>
                    <td>
                        @if ($k->id_status == 1)

                            <a href="{{ url('/customer/capaian/kontrak-proyek-dana/' . $k->id_proyek_dana . '/upload-bukti') }}">
                                <button class="tKonfirmasi">
                                    Bayar
                                </button>
                            </a>
                            <form action="{{ url('customer/capaian/kontrak-proyek-dana/' . $k->id_proyek_dana) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus kontrak?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="tTolak" type="submit">
                                    Batalkan
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
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
                    @foreach($kontrakSewaLahan as $i => $k)
                    <tr>
                        <td>{{ $k->id_kontrak_sewa_lahan }}</td>
                        <td>{{ $k->sewaLahan->namalahan }}</td>
                        <td>{{ $k->sewaLahan->luas }}</td>
                        <td>{{ $k->sewaLahan->durasi }}</td>
                        <td>{{ $k->sewaLahan->hargasewa }}</td>
                        <td>{{ $k->sewaLahan->created_at->format('d/m/Y') }}</td>
                        <td>
                            @if ($k->id_status == 1)
                            <a href="{{ url('/customer/capaian/kontrak-sewa-lahan/' . $k->id_kontrak_sewa_lahan . '/upload-bukti') }}">
                                <button class="tKonfirmasi">
                                    Bayar
                                </button>
                            </a>
                            <form action="{{ url('/customer/capaian/kontrak-sewa-lahan/' . $k->id_kontrak_sewa_lahan) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah anda yakin ingin menghapus kontrak sewa lahan?');">
                                @csrf
                                @method('DELETE')
                                <button class="tTolak" type="submit">
                                    Batalkan
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                  </table>
            </div>
    </div>
</body>
</html>
