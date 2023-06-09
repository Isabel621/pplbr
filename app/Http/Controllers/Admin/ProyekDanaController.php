<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProyekDana;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProyekDanaRequest;

use Illuminate\Http\Request;

class ProyekDanaController extends Controller
{
    public function index()
    {
        $proyekdana_admin = ProyekDana::all();
        return view('Admin.ProyekDanaAdmin', compact('proyekdana_admin') );
    }

    public function edit($proyekdana_admin_id)
    {
        $proyekdana_admin = ProyekDana::find($proyekdana_admin_id);
        return view('Mitra.EditProyekDana', compact('proyek$proyekdana_admin'));
    }

    public function update(ProyekDanaRequest $request, $proyekdana_admin_id)
    {
        $data = $request->validated();

        $proyekdana_admin = ProyekDana::find($proyekdana_admin_id);
        $proyekdana_admin->namaproyek = $data['namaproyek'];
        $proyekdana_admin->profit = $data['profit'];
        $proyekdana_admin->tenor= $data['tenor'];


        if($request->hasfile('gambar')){

            $destination = 'uploads/proyekdana/'.$proyekdana_admin->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/proyekdana/', $filename );
            $proyekdana_admin->gambar = $filename;
        }

        $proyekdana_admin->deskripsi = $data['deskripsi'];
        $proyekdana_admin->limit = $data['limit'];
        $proyekdana_admin->dana= $data['dana'];
        $proyekdana_admin->update();

        return redirect('/proyekdana-mitra')->with('message', 'Proyek Dana berhasil diubah');
    }
}
