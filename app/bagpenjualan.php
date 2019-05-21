<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bagpenjualan extends Model
{
    //
    protected $table = 'bagpenjualan';
    protected $fillable = ['id_user','nama_bagpenjualan','tempat_lahir','tgl_lahir','alamat','jenkel','no_tlp'];
     public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
