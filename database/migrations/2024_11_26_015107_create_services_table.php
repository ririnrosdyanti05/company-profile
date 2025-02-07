<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Primary Key, Auto Increment
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('profile_id');

            $table->string('name', 100); // Nama layanan
            $table->text('description')->nullable(); // Deskripsi layanan
            $table->decimal('price', 10, 2); // Harga layanan
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
