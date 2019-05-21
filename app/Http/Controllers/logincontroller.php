<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;

class logincontroller extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function getlogin()
   	{
   		return view('login');
   	}

   	public function postLogin(Request $data){
   		if(Auth::attempt(['username' => $data->username,'password' => $data->password]))
   		{
   			if(Auth::user()->role->nama_role === 'Admin'){
   				toast('Login Berhasil Sebagai Admin','success','top-right');
   				return redirect(route('index'));

   			}
        elseif(Auth::user()->role->nama_role === 'BagPenjualan'){
   				toast('Login Berhasil Sebagai Admin Penjualan','success','top-right');
          return redirect(route('indexpenjualan'));

          
   			}
        elseif(Auth::user()->role->nama_role === 'Manajer'){
   				toast('Login Berhasil Sebagai Manajer','success','top-right');
   				return redirect(route('indexmanajer'));

        }
        elseif(Auth::user()->role->nama_role === 'StaffGudang'){
          toast('Login Berhasil Sebagai Admin Gudang','success','top-right');
          return redirect(route('indexstaff'));

   			}
        else{
   				return redirect(route('logout'));
   			}

   		  }else{
   			  toast('Login Gagal','error','top-right');
   			  return redirect(route('login'));
   		}
   	}
}
