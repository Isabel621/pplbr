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
        Schema::create('proyek_dana', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mitra')->constrained(
                table: 'users', column: 'id'
            );
            $table->string('namaproyek');
            $table->string('profit');
            $table->string('tenor');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('limit');
            $table->string('dana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek_dana');
    }
};
