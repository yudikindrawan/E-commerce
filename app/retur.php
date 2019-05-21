<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retur extends Model
{
     protected $table = 'retur';
    protected $fillable = ['id_produk','id_customer','jumlah'];
    public function produk(){
    	return $this->belongsTo('App\produk','id_produk');
    }
    public function customer(){
    	return $this->belongsTo('App\customer','id_retur');
    }
}
