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
        Schema::create('kontrak_sewa_lahan', function (Blueprint $table) {
            $table->id('id_kontrak_sewa_lahan');
            $table->foreignId('id_sewa_lahan')->constrained(
                table: 'sewalahan', column: 'id'
            );
            $table->string('nik');
            $table->string('bukti_pembayaran');
            $table->foreignId('id_status')->constrained(
                table: 'status', column: 'status_id'
            );
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrak_sewa_lahan');
    }
};
