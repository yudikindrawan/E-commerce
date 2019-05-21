<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk');
            $table->unsignedinteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedinteger('id_size');
            $table->foreign('id_size')->references('id')->on('size')->onDelete('cascade')->onUpdate('cascade');
            $table->string('stok');
            $table->string('keterangan');
            $table->string('harga');
            $table->string('desain');
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
        Schema::dropIfExists('produk');
    }
}
