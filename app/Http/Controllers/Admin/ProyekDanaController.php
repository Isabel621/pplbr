<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProyekDana;
use Illuminate\Http\Request;

class ProyekDanaController extends Controller
{
    public function index()
    {
        $proyekdana_admin = ProyekDana::all();
        return view('Admin.ProyekDanaAdmin', compact('proyekdana_admin') );
    }
}
