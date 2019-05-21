<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan_size extends Model
{
    //
    protected $table = 'pemesanan_size';
    protected $fillable = ['id_pemesanan','id_size','jumlah'];
}
