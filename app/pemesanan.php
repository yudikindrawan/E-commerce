<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    //
    protected $table = 'pemesanan';
    protected $fillable = ['id_customer','id_size','jumlah_pemesanan'];
    public function penjualan(){
    	return $this->hasMany('penjualan','id_pemesanan');
    }
    public function customer(){
    	return $this->hasMany('customer','id_customer');
    }
    public function size(){
    	return $this->belongsTo('App/size','id_size');
    }
    public function pemesanan(){
        return $this->belongsTo('App/pemesanan','id_pemesanan');
    }
    public function kategori(){
        return $this->hasMany('App/kategori','id_kategori');
    }
}
