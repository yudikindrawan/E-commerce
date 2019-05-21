<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id_produk','id_customer','jumlah','no_telp','email','alamat'];
    public function customer(){
    	return $this->belongsTo('App\customer','id_customer');
    }
    public function produk(){
    	return $this->belongsTo('App\produk','id_produk');
    }
    public function pemesanan(){
    	return $this->belongsTo('App/pemesanan','id_pemesanan');
    }

}
