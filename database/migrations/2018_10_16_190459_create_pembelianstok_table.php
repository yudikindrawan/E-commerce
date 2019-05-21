<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianstokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelianstok', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk');
            $table->unsignedinteger('id_supplier');
            $table->foreign('id_supplier')->references('id')->on('supplier')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jumlah');
            $table->string('harga');
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
        Schema::dropIfExists('pembelianstok');
    }
}
