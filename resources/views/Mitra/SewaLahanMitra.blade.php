<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Lahan Mitra</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/SewaLahanMitra.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>
    @extends('layouts/Mitra')
    @section('main-content')

    <div class="badan">
        <div class="judul">
            <div>
                Sewa Lahan
            </div>
            <a href="{{ url('/tambah-sewalahan-mitra')}}">
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
                  <th>Nama Pemilik</th>
                  <th>Nama Lahan</th>
                  <th>Luas</th>
                  <th>Durasi</th>
                  <th>Gambar</th>
                  <th>Deskripsi</th>
                  <th>Harga Sewa</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($sewalahan as $item)
                    <tr onclick="location.href='{{ url('/detailSewalahan'.$item->id)}}'">
                        <td>{{ $item->id}}</td>
                        {{-- <td>{{ $item->id}}</td> --}}
                        {{-- <td>{{ $item->namamitra}}</td> --}}

                        <td>{{ $item->namapemilik}}</td>
                        <td>{{ $item->namalahan}}</td>
                        <td>{{ $item->luas}}</td>
                        <td>{{ $item->durasi}}</td>
                        <td>
                            <img src="{{ asset('uploads/sewalahan/'.$item->gambar)}}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{ $item->deskripsi}}
                            </td>
                        <td>{{ $item->hargasewa}}</td>
                        <td>
                            <a href="{{ url('/edit-sewalahan-mitra'.$item->id)}}" class="tEdit">Edit</a>
                            <a href="{{ url('/hapus-sewalahan-mitra'.$item->id)}}" class="tHapus">Hapus</a>
                            {{-- <a href="{{ url('/detailProyek'.$item->id)}}" class="tLihat">Lihat</a> --}}

                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>

@endsection
