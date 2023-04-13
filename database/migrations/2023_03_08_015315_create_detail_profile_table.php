<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    //sintaks dibawah ini adalah gambaran table pada database yang sudah kita buat
    //di localhost table ini akan berjalan setelah di lakukannya perintah di terminal "php artisan migrate"
    public function up(): void
    {
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('nomor_telepon');
            $table->date('ttl');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_profile');
    }
};
