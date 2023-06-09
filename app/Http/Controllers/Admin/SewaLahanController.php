<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SewaLahan;
use Illuminate\Http\Request;

class SewaLahanController extends Controller
{
    public function index()
    {
        $sewalahan_admin = SewaLahan::all();
        return view('Admin.SewaLahanAdmin', compact('sewalahan_admin') );
    }
}
