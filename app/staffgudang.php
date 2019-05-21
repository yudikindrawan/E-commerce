<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffgudang extends Model
{
    //
    protected $table = 'staffgudang';
    protected $fillable = ['id_user','nama_staffgudang','tempat_lahir','tgl_lahir','alamat','jenkel','no_tlp'];
     public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
