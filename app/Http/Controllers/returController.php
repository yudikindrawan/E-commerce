<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\retur;
use App\user;
use App\produk;
use App\customer;
use DB;

class returController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //
        
            $returs = DB::table('retur')
                        ->join('produk','retur.id_produk','=','produk.id')
                        ->join('customer','retur.id_customer','=','customer.id')
                        ->select('retur.*','produk.nama_produk','customer.nama_customer')
                        ->get();

            return view('admin.retur.retur',compact('returs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $users = User::all();
        return view('admin/retur/modal_create_retur',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $retur = new retur;
        $retur->id_produk              = $request->id_produk;
        $retur->id_customer            = $request->id_customer;
        $retur->jumlah                 = $request->jumlah;
        if ($retur->save()){
            toast('Data retur Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data retur Gagal Ditambah','error','top-right');
            return redirect()->back();
        }
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
        //
        $retur = retur::find($request->id);
        $produks = produk::all();
        $customers = customer::all();
        return view('admin/retur/modal_edit_retur',compact('retur','produks','customers'));
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
        //
        $retur = retur::find($id);
        $retur->nama_retur          = $request->nama_retur;
        $retur->alamat                 = $request->alamat;
        $retur->no_telp                = $request->no_telp;
        $retur->email                  = $request->email;
        if ($retur->save()){
            toast('Data retur Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data retur Gagal Diubah','error','top-right');
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
