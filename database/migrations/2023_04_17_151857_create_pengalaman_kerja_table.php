<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // Membuat tabel pengalaman_kerja yang mana akan digunakan untuk menyimpan data pengalaman kerja di database
    // di sini juga akan ditentukan kolom apa saja yang akan digunakan


    public function up(): void
    {
        Schema::create('pengalaman_kerja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('tahun_masuk');
            $table->string('tahun_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman_kerja');
    }
};
