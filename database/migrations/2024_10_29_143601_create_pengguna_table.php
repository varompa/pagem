<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('id_pengguna', 10)->primary();
            $table->string('nama_pengguna', 50);
            $table->string('alamat_pengguna', 10)->nullable();
            $table->string('no_telepon_pengguna', 13)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('role', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}

