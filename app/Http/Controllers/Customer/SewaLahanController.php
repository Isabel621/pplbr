<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use Illuminate\Http\Request;

class SewaLahanController extends Controller
{
    public function index()
    {
        $sewalahan_customer = SewaLahan::all();
        return view('Customer.SewaLahanCustomer', compact('sewalahan_customer') );
    }
    public function tambahsewa($id)
    {
        $tambahsewa = SewaLahan::find($id);
        return view('Customer.TambahKontrakSewaLahan', compact('tambahsewa'));

    }
}
