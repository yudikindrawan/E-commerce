<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manajer extends Model
{
    //
     protected $table = 'manajer';
    protected $fillable = ['id_user','nama_manajer','tempat_lahir','tgl_lahir','alamat','jenkel','no_tlp'];
     public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
