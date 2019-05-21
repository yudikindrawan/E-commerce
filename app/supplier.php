<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $table = 'supplier';
    protected $fillable = ['nama_supplier','alamat','no_telp','email'];
    public function pembelianstok(){
    	return $this->hasMany('App\pembelianstok','id_supplier');
    } 
}
