<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id'); // id pelanggan

            $table->text('message'); // Pesan testimoni
            $table->unsignedTinyInteger('rating'); // Penilaian (1-5)
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
