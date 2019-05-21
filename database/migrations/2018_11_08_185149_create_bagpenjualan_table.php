<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagpenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagpenjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_bagpenjualan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('jenkel');
            $table->string('no_tlp');
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
        Schema::dropIfExists('bagpenjualan');
    }
}
