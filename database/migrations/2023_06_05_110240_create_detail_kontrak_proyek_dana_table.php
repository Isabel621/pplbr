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
        Schema::create('detail_kontrak_proyek_dana', function (Blueprint $table) {
            $table->id('id_detail_kontrak_proyek_dana');
            $table->foreignId('id_kontrak_proyek_dana')->constrained(
                table: 'kontrak_proyek_dana', column: 'id_kontrak_proyek_dana'
            );
            $table->foreignId('id_proyek_dana')->constrained(
                table: 'proyek_dana', column: 'id'
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
        Schema::dropIfExists('detail_kontrak_proyek_dana');
    }
};
