<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeReferalTable extends Migration
{
    public function up()
    {
        Schema::create('kode_referal', function (Blueprint $table) {
            $table->string('id_kodereferal', 10)->primary();
            $table->string('tanggal_dibuat', 50)->nullable();
            $table->string('tanggal_dipakai', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kode_referal');
    }
}

