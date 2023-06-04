<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{

    public function index()
    {
        $edukasi = Edukasi::all();
        return view('Mitra.EdukasiMitra', compact('edukasi')) ;
    }

    public function create()
    {
        return view('Mitra.TambahEdukasi');
    }
}
