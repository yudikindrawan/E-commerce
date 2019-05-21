<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\role;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index (Request $request)
     {
           $cari = $request->post('cari');
        $berdasarkan = $request->post('berdasarkan');
        if ($cari=="" or $berdasarkan=="" ) {
            $users = DB::table('users')
                    ->join('roles','roles.id','=','users.roles_id')
                    ->select('users.*','roles.nama_role')->paginate(15);
            return view('admin.datauser.user',compact('users'));
        }else{
            $users = DB::table('users')
                    ->join('roles','roles.id','=','users.roles_id')
                    ->select('users.*','roles.nama_role')->where($berdasarkan, 'LIKE', '%' . $cari . '%')->paginate(15);
            $users->appends($request->only('cari','berdasarkan'));
            return view('admin.datauser.user',compact('users'));
        }
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
     	$roles = Role::all();
     	return view('admin/datauser/modal_create', compact('roles'));
     }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
     	$user = new User;
     	$user->username    = $request->username;
     	$user->roles_id    = $request->roles_id;
     	$user->password    = bcrypt($request->username);
          $user->save();
          return redirect()->back();
     }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {
     	//
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit(Request $request)
     {
     	$user = User::find($request->id);
     	return view('admin/datauser/modal_edit',compact('user'));
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
     	$user = User::find($id);
     	$user->username   = $request->username;
     	$user->password   = bcrypt($request->username);
     	if ($user->save()){
     		toast('Data User Berhasil Direset','success','top-right');
     		return redirect()->back();
     	}else{
     		toast('Data user gagal direset','error','top-right');
     		return redirect()->back();
     	}
     }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
     {
     	//
     }
}
