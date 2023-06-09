<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Dana</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Mitra/TambahProyekDana.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
</head>
<body>

    <div class="kembali">
        <a href="{{url ('/proyekdana-mitra')}}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="box">
        <div class="sub">
            <p>Tambah Proyek Dana</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ url('/tambah-proyekdana-mitra') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Proyek</label><br>
                <input type="text" name="namaproyek" class="form-control" placeholder="Nama Proyek...">

                <label for="">Profit</label><br>
                <input type="text" name="profit" class="form-control" placeholder="Profit...">

                <label for="">Tenor</label><br>
                <input type="text" name="tenor" class="form-control" placeholder="Tenor...">


                <label for="">Gambar</label>
                <p class="image_upload">
                    <label for="userImage">
                    <a class="gambar" ><span class='fa fa-picture-o' id="fa1"></span>Pilih Gambar</a>
                    </label>
                    <input type="file" name="gambar" class="form-control" id="userImage">
                </p>

                <label for="">Deskripsi</label><br>
                <textarea name="deskripsi" id="desk" class="form-control" rows="10"></textarea>

                <label for="">Limit</label><br>
                <input type="text" name="limit" class="form-control" placeholder="Limit...">

                <label for="">Dana</label><br>
                <input type="text" name="dana" class="form-control" placeholder="Dana...">

                <div class="submit">
                    <input type="submit"  value="Tambah">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
