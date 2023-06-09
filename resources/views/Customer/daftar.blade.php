@extends('layouts.customer')
@section('page-title', 'Daftar Customer')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/Customer/daftar.css') }}">
@endpush

@section('content')
    <div class="kembali">
        <a href="{{ route('dashboard') }}">
            <button class="tombol">
                <i class="fa fa-chevron-left fa-lg"></i>
                <span class="tTombol">Kembali</span>
            </button>
        </a>
    </div>

    <div class="judul">
        <p>Daftarkan akun anda,</p>
        <p>Untuk memulai proyek dana dan sewa lahan</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Daftar Customer</p>
            <p><a href="{{ route('login') }}" class="masuk">Masuk</a></p>
        </div>

        <form action="{{ route('customer.daftar.store') }}" method="POST">
            @csrf
            <div class="form">
                <label for="">Nama Lengkap</label><br>
                <input type="text" placeholder="Nama Lengkap..." name="nama_lengkap">

                <label for="">Nama Pengguna</label><br>
                <input type="text" placeholder="Nama Pengguna..." name="nama_pengguna">

                <label for="">Email</label><br>
                <input type="text" placeholder="Email..." name="email">

                <label for="">Nomor Telepon</label><br>
                <input type="text" placeholder="Nomor Telepon..." name="nomor_telepon">

                <label for="">Nomor Induk Kependudukan (NIK)</label><br>
                <input type="text" placeholder="Nomor Induk Kependudukan (NIK)..." name="nik">

                <label for="">Alamat</label><br>
                <input type="text" placeholder="Alamat..." name="alamat">

                <div class="alamat">
                    <div>
                        <label for="">Kecamatan</label><br>
                        <input type="text" placeholder="Kecamatan..." name="kecamatan">
                    </div>
                    <div>
                        <label for="">Kota</label><br>
                        <input type="text" placeholder="Kota..." name="kota">
                    </div>
                    <div>
                        <label for="">Provinsi</label><br>
                        <input type="text" placeholder="Provinsi..." name="provinsi">
                    </div>
                </div>

                <div class="rekening">
                    <div>
                        <label for="">Nomor Rekening</label><br>
                        <input type="text" placeholder="Nomor Rekening..." name="nomor_rekening">
                    </div>
                    <div>
                        <label for="">Nama Bank</label><br>
                        <input type="text" placeholder="Nama Bank..." name="nama_bank">
                    </div>
                </div>

                <label for="">Kata Sandi</label><br>
                <input type="password" placeholder="Kata Sandi..." name="password">

                <label for="">Konfirmasi Kata Sandi</label><br>
                <input type="password" placeholder="Konfirmasi Kata Sandi..." name="password_confirmation">

                <div class="submit">
                    <input type="submit" value="Daftar">
                </div>

            </div>
        </form>

    </div>

@endsection
