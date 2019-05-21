<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pemesanan_size', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan');
            $table->integer('id_size');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('pemesanan_size');
    }
}
