<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];
    public function produk(){
    	return $this->hasMany('App\produk','id_kategori');
    }
     public function kategori(){
    	return $this->belongsTo('App\kategori','id_kategori');
    }
}
