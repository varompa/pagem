<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierTable extends Migration
{
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->string('id_supplier', 10)->primary();
            $table->string('nama_supplier', 50);
            $table->string('alamat_supplier', 100)->nullable();
            $table->string('no_telepon_supplier', 13)->nullable();
            $table->string('email', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}

