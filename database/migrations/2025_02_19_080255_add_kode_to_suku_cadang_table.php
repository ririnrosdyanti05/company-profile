<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('suku_cadang', function (Blueprint $table) {
            $table->string('kode_suku_cadang')->after('id')->unique();
        });
    }

    public function down()
    {
        Schema::table('suku_cadang', function (Blueprint $table) {
            $table->dropColumn('kode_suku_cadang');
        });
    }
};
