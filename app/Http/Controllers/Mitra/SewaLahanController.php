<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use App\Http\Requests\SewaLahanRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SewaLahanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sewalahan = SewaLahan::where('id_mitra', $user->id)->get();
        return view('Mitra.SewalahanMitra', compact('sewalahan')) ;
    }

    public function create()
    {
        return view('Mitra.TambahSewaLahan');
    }

    public function store(SewaLahanRequest $request)
    {
        $data = $request->validated();
        $user = Auth::user();
        $sewalahan = new SewaLahan();

        $sewalahan->id_mitra = $user->id;

        $sewalahan->namapemilik = $data['namapemilik'];
        $sewalahan->namalahan = $data['namalahan'];
        $sewalahan->luas= $data['luas'];
        $sewalahan->durasi= $data['durasi'];


        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/sewalahan/', $filename );
            $sewalahan->gambar = $filename;
        }

        $sewalahan->deskripsi = $data['deskripsi'];
        $sewalahan->hargasewa = $data['hargasewa'];
        $sewalahan->save();

        return redirect('/sewalahan-mitra')->with('message', 'Proyek Dana berhasil ditambahkan');

    }

    public function edit($sewalahan_id)
    {
        $sewalahan = SewaLahan::find($sewalahan_id);
        return view('Mitra.EditSewalahan', compact('sewalahan'));
    }

    public function update(SewaLahanRequest $request, $sewalahan_id)
    {
        $data = $request->validated();

        $sewalahan = SewaLahan::find($sewalahan_id);
        $sewalahan->namapemilik = $data['namapemilik'];
        $sewalahan->namalahan = $data['namalahan'];
        $sewalahan->luas= $data['luas'];
        $sewalahan->durasi= $data['durasi'];


        if($request->hasfile('gambar')){

            $destination = 'uploads/sewalahan/'.$sewalahan->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/sewalahan/', $filename );
            $sewalahan->gambar = $filename;
        }

        $sewalahan->deskripsi = $data['deskripsi'];
        $sewalahan->hargasewa = $data['hargasewa'];
        $sewalahan->update();

        return redirect('/sewalahan-mitra')->with('message', 'Proyek Dana berhasil diubah');
    }

    public function destroy($sewalahan_id)
    {

        $sewalahan = SewaLahan::find($sewalahan_id);
        if($sewalahan)
        {
            $destination = 'uploads/sewalahan/'.$sewalahan->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $sewalahan->delete();
            return redirect('/sewalahan-mitra')->with('message', 'Proyek Dana berhasil dihapus');
        }
        else
        {
            return redirect('/sewalahan-mitra')->with('message', 'Tidak ditemukan ID Proyek Dana');
        }
    }
}
