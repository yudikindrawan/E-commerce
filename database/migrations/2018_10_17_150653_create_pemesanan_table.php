<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_customer');
            $table->string('nama_pem_produk');
            $table->unsignedinteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jumlah');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('variasi');
            $table->string('desain');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pemesanan');
    }
}
