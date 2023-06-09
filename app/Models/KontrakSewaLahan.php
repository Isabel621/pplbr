<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KontrakSewaLahan extends Model
{
    use HasFactory;

    protected $table = 'kontrak_sewa_lahan';
    protected $primaryKey = 'id_kontrak_sewa_lahan';


    public function sewaLahan(): BelongsTo
    {
        return $this->belongsTo(SewaLahan::class, 'id_sewa_lahan', 'id');
    }
}
