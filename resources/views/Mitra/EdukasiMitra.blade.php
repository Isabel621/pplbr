<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/EdukasiMitra.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>

<body>
    @extends('layouts/Mitra')
    @section('main-content')


    <div class="badan">
        <div class="judul">
            <div>
                Edukasi
            </div>
            <a href="{{ url('/tambah-edukasi-mitra') }}">
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
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($edukasi as $edu)
                        <tr onclick="location.href='{{ url('/' . $edu->id) }}'">
                            <td>{{ $edu->id }}</td>
                            <td>{{ $edu->judul }}</td>
                            <td>
                                <img src="{{ asset('uploads/edukasi/' . $edu->gambar) }}" width="50px" height="50px"
                                    alt="">
                            </td>
                        <td>{{ $edu->deskripsi}}</td>

                            <td>
                                <a href="{{ url('/edit-edukasi-mitra' . $edu->id) }}" class="tEdit">Edit</a>
                                <a href="{{ url('/hapus-edukasi-mitra' . $edu->id) }}" class="tHapus">Hapus</a>
                                {{-- <a href="{{ url('/detailProyek'.$item->id)}}" class="tLihat">Lihat</a> --}}

                            </td>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>
