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
        Schema::create('suku_cadang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_suku_cadang')->unique(); // Tambah kode suku cadang unik
            $table->string('nama_suku_cadang'); // Nama lebih spesifik
            $table->decimal('harga', 10, 2)->default(0.00); // Harga default 0.00
            $table->integer('stok')->default(0); // Stok default 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suku_cadang');
    }
};
