<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekDana extends Model
{
    use HasFactory;

    protected $table = 'proyek_dana';

    protected $fillable = [
        'namaproyek', 'profit', 'tenor', 'gambar', 'deskripsi', 'limit', 'dana'
    ];
}
