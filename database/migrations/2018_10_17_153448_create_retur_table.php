<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('id_produk');
             $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedinteger('id_customer');
             $table->foreign('id_customer')->references('id')->on('customer')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jumlah');
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
        Schema::dropIfExists('retur');
    }
}
