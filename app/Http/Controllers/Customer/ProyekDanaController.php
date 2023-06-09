<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\ProyekDana;
use Illuminate\Http\Request;

class ProyekDanaController extends Controller
{
    public function index()
    {
        $proyekdana_customer = ProyekDana::all();
        return view('Customer.ProyekDanaCustomer', compact('proyekdana_customer') );
    }

    public function detail($id)
    {
        $detailpr = ProyekDana::find($id);
        return view('Customer.detailProyek', compact('detailpr'));
        // view($alamatTemplate, $data)
        // $data itu tipe datanya array
    }

    // public function formdana($proyek_dana_id)
    // {
    //     $proyek_dana = ProyekDana::find($proyek_dana_id);
    //     if (!$proyek_dana) {
    //         return back();
    //     }
    //     return view('', compact('proyek_dana_id'));
    // }
    public function tambahproyek($id)
    {
        $tambahproyek = ProyekDana::find($id);
        return view('Customer.TambahKontrakProyekDana', compact('tambahproyek'));

    }

}
