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
        Schema::create('booking_services', function (Blueprint $table) {
            $table->id();
            $table->string('kode_booking')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pemilik');
            $table->string('jenis_motor');
            $table->string('nomor_stnk');
            $table->year('tahun_keluaran');
            $table->date('terakhir_service');
            $table->enum('jenis_kb', ['KB 1', 'KB 2', 'KB 3', 'KB 4', 'Non KB']);
            $table->unsignedBigInteger('suku_cadang_id');
            $table->text('keluhan')->nullable();
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->date('tanggal_booking');
            $table->time('jam_booking');
            $table->timestamps();

            // Foreign Key untuk suku cadang jika diperlukan
            $table->foreign('suku_cadang_id')->references('id')->on('suku_cadang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_services');
    }
};
