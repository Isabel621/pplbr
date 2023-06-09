<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KontrakProyekDana extends Model
{
    use HasFactory;

    protected $table = 'kontrak_proyek_dana';
    protected $primaryKey = 'id_kontrak_proyek_dana';



    protected $guarded = ['id'];

    public function proyekDana() : BelongsTo
    {
        return $this->belongsTo(ProyekDana::class, 'id_proyek_dana', 'id');
    }

}
