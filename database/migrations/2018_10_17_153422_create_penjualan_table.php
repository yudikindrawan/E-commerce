<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedinteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customer')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jumlah');
            $table->string('no_telp');
            $table->string('email');
            $table->string('alamat');
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
        Schema::dropIfExists('penjualan');
    }
}
