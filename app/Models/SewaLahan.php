<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaLahan extends Model
{
    use HasFactory;
    protected $table = 'sewalahan';

    protected $fillable = [
        'namapemilik', 'luas', 'lokasi', 'durasi', 'gambar', 'deskripsi', 'hargasewa'
    ];
}
