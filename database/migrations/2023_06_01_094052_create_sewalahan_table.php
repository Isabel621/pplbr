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
        Schema::create('sewalahan', function (Blueprint $table) {
            $table->id();
            $table->string('namapemilik');
            $table->string('namalahan');
            $table->string('luas');
            $table->string('lokasi');
            $table->string('durasi');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('hargasewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewalahan');
    }
};
