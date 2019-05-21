<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function bagpenjualan(){
        return $this->hasMany('App\bagpenjualan','id_user');
    }

     public function manajer(){
        return $this->hasMany('App\manajer','id_user');
    }

    public function staffgudang(){
        return $this->hasMany('App\staffgudang','id_user');
    }

    public function role(){
        return $this->belongsTo(role::class,'roles_id');
    }

    public function hasRole($role){
        if($this->role->nama_role == $role){
            return true;
        }
    }
}
