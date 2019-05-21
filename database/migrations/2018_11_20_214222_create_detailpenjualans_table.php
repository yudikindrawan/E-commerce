<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailpenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order');
            $table->integer('id_produk');
            $table->integer('jumlah');
            $table->integer('sub_total');
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
        Schema::dropIfExists('detailpenjualans');
    }
}
