<?php

namespace App\Http\Controllers;

use App\Models\KontrakProyekDana;
use App\Models\KontrakSewaLahan;
use Illuminate\Http\Request;

class CapaianController extends Controller
{

    //Customer

    public function index()
    {
        $kontrakProyekDana = KontrakProyekDana::with('proyekDana')->get();
        $kontrakSewaLahan = KontrakSewaLahan::with('sewaLahan')->get();

        return view('Customer.CapaianCustomer', compact('kontrakProyekDana', 'kontrakSewaLahan'));
    }

    public function viewUploadBuktiKontrakProyekDanaCustomer($id)
    {
        $tipe = 'kontrak_proyek_dana';
        return view('Customer.UploadBuktiCustomer', compact('id', 'tipe'));
    }

    public function uploadBuktiKontrakProyekDanaCustomer(Request $req, $id)
    {
        $data = $req->validate([
            'id' => 'required',
            'bukti' => 'required'
        ]);

        $kontrakProyekDana = KontrakProyekDana::find($id);

        $file = $req->file('bukti');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/kontrak-proyek-dana/', $filename);
        $kontrakProyekDana->bukti_pembayaran = $filename;

        $kontrakProyekDana->save();

        return redirect('customer/capaian');
    }

    public function viewUploadBuktiKontrakSewaLahanCustomer($id)
    {
        $tipe = 'kontrak_sewa_lahan';
        return view('Customer.UploadBuktiCustomer', compact('id', 'tipe'));
    }

    public function batalkanKontrakProyekDanaCustomer($id)
    {
        KontrakProyekDana::destroy($id);

        return redirect('/customer/capaian');
    }

    public function batalkanKontrakProyekDanaCustomeruploadBuktiKontrakSewaLahanCustomer(Request $req, $id)
    {
        $data = $req->validate([
            'id' => 'required',
            'bukti' => 'required'
        ]);

        $kontrakSewaLahan = KontrakSewaLahan::find($id);

        $file = $req->file('bukti');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/kontrak-sewa-lahan/', $filename);
        $kontrakSewaLahan->bukti_pembayaran = $filename;

        $kontrakSewaLahan->save();

        return redirect('customer/capaian');
    }

     public function batalkanKontrakSewaLahanCustomer($id)
    {
        KontrakSewaLahan::destroy($id);

        return redirect('/customer/capaian');
    }

    //capaian mitra
    public function indexx()
    {
        $kontrakProyekDana = KontrakProyekDana::with('proyekDana')->get();
        $kontrakSewaLahan = KontrakSewaLahan::with('sewaLahan')->get();

        return view('Mitra.CapaianMitra', compact('kontrakProyekDana', 'kontrakSewaLahan'));
    }
}

