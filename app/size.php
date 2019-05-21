<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    //
    protected $table = 'size';
    protected $fillable = ['nama_size'];
    public function produk(){
    	return $this->hasMany('App\produk','id_size');
    }
    public function size(){
    	return $this->hasMany('size','id_size');
    }
}
