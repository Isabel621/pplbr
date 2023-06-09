<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_kontrak_sewa_lahan', function (Blueprint $table) {
            $table->id('id_detail_kontrak_sewa_lahan');
            $table->foreignId('id_kontrak_sewa_lahan')->constrained(
                table: 'kontrak_sewa_lahan', column: 'id_kontrak_sewa_lahan'
            );
            $table->foreignId('id_sewa_lahan')->constrained(
                table: 'sewalahan', column: 'id'
            );
            $table->dateTime('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kontrak_sewa_lahan');
    }
};
