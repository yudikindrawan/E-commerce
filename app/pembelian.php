<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    //
    protected $table = 'pembelianstok';
    protected $fillable = ['nama_produk','id_supplier','jumlah','harga'];
    public function supplier(){
    	return $this->belongsTo('App\supplier','id_supplier');
    } 
}
