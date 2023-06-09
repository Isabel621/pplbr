<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProyekDanaRequest;
use App\Models\ProyekDana;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProyekDanaController extends Controller
{
    public function index()
    {
        $idMitra = Auth::user()->id;
        $proyek_dana = ProyekDana::where('id_mitra', $idMitra)->get();
        return view('Mitra.ProyekDanaMitra', compact('proyek_dana')) ;
    }

    public function create()
    {
        return view('Mitra.TambahProyekDana');
    }

    public function store(ProyekDanaRequest $request)
    {
        $data = $request->validated();

        $proyek_dana = new ProyekDana;
        $user = Auth::user();

        $proyek_dana->namaproyek = $data['namaproyek'];
        $proyek_dana->profit = $data['profit'];
        $proyek_dana->tenor= $data['tenor'];


        if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/proyekdana/', $filename );
            $proyek_dana->gambar = $filename;
        }

        $proyek_dana->deskripsi = $data['deskripsi'];
        $proyek_dana->limit = $data['limit'];
        $proyek_dana->dana= $data['dana'];
        $proyek_dana->id_mitra = $user->id;
        $proyek_dana->save();

        return redirect('/proyekdana-mitra')->with('message', 'Proyek Dana berhasil ditambahkan');

    }

    public function edit($proyek_dana_id)
    {
        $proyek_dana = ProyekDana::find($proyek_dana_id);
        return view('Mitra.EditProyekDana', compact('proyek_dana'));
    }

    public function update(ProyekDanaRequest $request, $proyek_dana_id)
    {
        $data = $request->validated();

        $proyek_dana = ProyekDana::find($proyek_dana_id);
        $proyek_dana->namaproyek = $data['namaproyek'];
        $proyek_dana->profit = $data['profit'];
        $proyek_dana->tenor= $data['tenor'];


        if($request->hasfile('gambar')){

            $destination = 'uploads/proyekdana/'.$proyek_dana->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/proyekdana/', $filename );
            $proyek_dana->gambar = $filename;
        }

        $proyek_dana->deskripsi = $data['deskripsi'];
        $proyek_dana->limit = $data['limit'];
        $proyek_dana->dana= $data['dana'];
        $proyek_dana->update();

        return redirect('/proyekdana-mitra')->with('message', 'Proyek Dana berhasil diubah');
    }

    public function destroy($proyek_dana_id)
    {

        $proyek_dana = ProyekDana::find($proyek_dana_id);
        if($proyek_dana)
        {
            $destination = 'uploads/proyekdana/'.$proyek_dana->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $proyek_dana->delete();
            return redirect('/proyekdana-mitra')->with('message', 'Proyek Dana berhasil dihapus');
        }
        else
        {
            return redirect('/proyekdana-mitra')->with('message', 'Tidak ditemukan ID Proyek Dana');
        }
    }


}
