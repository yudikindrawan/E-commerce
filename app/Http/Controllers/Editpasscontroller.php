<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class Editpasscontroller extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('modal_ubah');
    }

    public function changePassword(Request $request)
    {
    	if(!(Hash::check($request->get('currentpassword'), Auth::user()->password))){
    		toast('Password Lama Salah. Silahkan Coba Lagi !','error','top-right');
    		return redirect()->back();
    	}

    	if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){
    		//current password and new password are same
    		toast('Password baru tidak boleh sama dengan password lama. Silahkan coba lagi !','error','top-right');
    		return redirect()->back();
    	}

    	//change password
    	$user = Auth::user();
    	$user->password = bcrypt($request->get('newpassword'));
    	$user->save();
    	toast('Password berhasil diubah','success','top-right');
    	return redirect()->back();
    }
}
