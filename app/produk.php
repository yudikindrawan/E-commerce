<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table = 'produk';
    protected $fillable = ['nama_produk', 'id_kategori', 'id_size', 'stok','keterangan','harga'];
    public function penjualan(){
    	return $this->hasMany('App\penjualan','id_produk');
    }
    public function size(){
    	return $this->belongsTo('App\size','id_size');
    }
    public function kategori(){
        return $this->belongsTo('App\kategori','id_kategori');
    }
    public function retur(){
    	return $this->hasMany('retur','id_produk');
    }
}
