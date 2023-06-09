<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Http\Requests\EdukasiRequest;
use App\Models\Edukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EdukasiController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $edukasi = Edukasi::where('id_mitra', $user->id)->get();
        return view('Mitra.EdukasiMitra', compact('edukasi')) ;
    }

    public function create()
    {
        return view('Mitra.TambahEdukasi');
    }

    public function store(EdukasiRequest $request)
    {
        $data = $request->validated();

        $edukasi = new Edukasi;
        $user = Auth::user();

        $edukasi->judul = $data['judul'];

        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/edukasi/', $filename );
            $edukasi->gambar = $filename;
        }

        $edukasi->deskripsi = $data['deskripsi'];
        $edukasi->id_mitra = $user->id;
        $edukasi->save();

        return redirect('/edukasi-mitra')->with('message', 'Edukasi berhasil ditambahkan');

    }

    public function edit($edukasi_id)
    {
        $edukasi =  Edukasi::find($edukasi_id);
        return view('Mitra.EditEdukasi', compact('edukasi'));
    }

    public function update(EdukasiRequest $request, $edukasi_id)
    {
        $data = $request->validated();

        $edukasi = Edukasi::find($edukasi_id);
        $edukasi->judul = $data['judul'];

        if($request->hasfile('gambar')){

            $destination = 'uploads/edukasi/'.$edukasi->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/proyekdana/', $filename );
            $edukasi->gambar = $filename;
        }

        $edukasi->deskripsi = $data['deskripsi'];
        $edukasi->update();

        return redirect('/edukasi-mitra')->with('message', 'Edukasi berhasil diubah');
    }

    public function destroy($edukasi_id)
    {

        $edukasi = Edukasi::find($edukasi_id);
        if($edukasi)
        {
            $destination = 'uploads/edukasi/'.$edukasi->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $edukasi->delete();
            return redirect('/edukasi-mitra')->with('message', 'Edukasi berhasil dihapus');
        }
        else
        {
            return redirect('/edukasi-mitra')->with('message', 'Tidak ditemukan ID Edukasi');
        }
    }
}
