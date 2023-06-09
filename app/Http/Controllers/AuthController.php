<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerCustomer(Request $req)
    {
        $data = $req->validate([
            'nama_lengkap' => 'required',
            'nama_pengguna' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'nomor_rekening' => 'required',
            'nama_bank' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);


        $user = User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'nama_pengguna' => $data['nama_pengguna'],
            'email' => $data['email'],
            'nomor_telepon' => $data['nomor_telepon'],
            'nik' => $data['nik'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kota' => $data['kota'],
            'provinsi' => $data['provinsi'],
            'nomor_rekening' => $data['nomor_rekening'],
            'nama_bank' => $data['nama_bank'],
            'password' => Hash::make($data['password']),
            'role' => 'customer'
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function registerMitra(Request $req)
    {
        $data = $req->validate([
            'nama_lengkap' => 'required',
            'nama_pengguna' => 'required',
            'nama_usaha' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'nomor_rekening' => 'required',
            'nama_bank' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',

        ]);

        $user = User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'nama_pengguna' => $data['nama_pengguna'],
            'nama_usaha' => $data['nama_usaha'],
            'email' => $data['email'],
            'nomor_telepon' => $data['nomor_telepon'],
            'nik' => $data['nik'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kota' => $data['kota'],
            'provinsi' => $data['provinsi'],
            'nomor_rekening' => $data['nomor_rekening'],
            'nama_bank' => $data['nama_bank'],
            'password' => Hash::make($data['password']),
            'role' => 'mitra',
        ]);

        Auth::login($user);

        return redirect('/proyekdana-mitra');
    }

    public function login(Request $req)
    {
        $data = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.proyekdana');
                case 'mitra':
                    return redirect()->route('mitra.proyekdana');
                case 'customer':
                    return redirect()->route('dashboard');
            }
        }

        return back();
    }
    //     public function loginView() {
    //         return view('Mitra.Login');
    //     }

    //     public function login(Request $request) {

    //         $data = $request->validate([
    //             'email' => 'required',
    //             'password' => 'required'
    //         ]);

    //         if (Auth::attempt($data)) {
    //             $request->session()->regenerate();

    //             $user = Auth::user();
    //             switch ($user->role) {
    //                 case 'admin':
    //                     return redirect('/proyekdana-admin');
    //                 case 'mitra':
    // TODO: redirect to mitra dashboard
    //     return redirect('/proyekdana-mitra');
    // case 'customer':
    // TODO: redirect to customer dashboard
    //             return redirect('/');
    //     }
    // }

    // return back();
    // }

    // public function register(Request $request) {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $password = Hash::make($data['password']);

    //     $user = new User();
    //     $user->name = $data['name'];
    //     $user->email = $data['email'];
    //     $user->password = $password;

    // role sesuaikan masing2 register
    // contoh, ini register mitra
    // $user->role = 'mitra';

    // $user->save();

    // Auth::attempt($user);
    // return redirect('/');
    //     }
}
