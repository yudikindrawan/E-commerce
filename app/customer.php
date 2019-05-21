<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = 'customer';
    protected $fillable = ['nama_customer','alamat','no_telp','email'];
    public function penjualan(){
    	return $this->hasMany('penjualan','id_customer');
    }
    public function pemesanan(){
    	return $this->hasMany('pemesanan','id_pemesanan');
    }
    public function retur(){
        return $this->hasMany('retur','id_customer');
    }
}
