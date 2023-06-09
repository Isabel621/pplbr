<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Dana Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/ProyekDanaMitra.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
    @extends('layouts/Mitra')
    @section('main-content')

    <div class="badan">
        <div class="judul">
            <div>
                Proyek Dana
            </div>
            <a href="{{ url('/tambah-proyekdana-mitra')}}">
                <div class="tambah">
                    Tambah
                </div>
            </a>
        </div>

        <div>
            <table align="center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Proyek</th>
                        <th>Profit</th>
                        <th>Tenor</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Limit</th>
                        <th>Dana</th>
                        <th>Aksi</th>
                        {{-- <th>Status</th> --}}

                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyek_dana as $item)
                    <tr onclick="location.href='{{ url('/detailProyek'.$item->id)}}'">
                        <td>{{ $item->id}}</td>
                        {{-- <td>{{ $item->id}}</td> --}}
                        {{-- <td>{{ $item->namamitra}}</td> --}}

                        <td>{{ $item->namaproyek}}</td>
                        <td>{{ $item->profit}}</td>
                        <td>{{ $item->tenor}}</td>
                        <td>
                            <img src="{{ asset('uploads/proyekdana/'.$item->gambar)}}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{ $item->deskripsi}}
                            </td>
                        <td>{{ $item->limit}}</td>
                        <td>{{ $item->dana}}</td>

                        <td>
                            <a href="{{ url('/edit-proyekdana-mitra'.$item->id)}}" class="tEdit">Edit</a>
                            <a href="{{ url('/hapus-proyekdana-mitra'.$item->id)}}" class="tHapus">Hapus</a>
                            {{-- <a href="{{ url('/detailProyek'.$item->id)}}" class="tLihat">Lihat</a> --}}

                        </td>
                        {{-- <td>{{ $item->status}}</td> --}}


                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    @endsection
</body>
</html>
