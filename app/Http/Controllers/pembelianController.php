<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembelian;
use App\supplier;
use App\user;

class pembelianController extends Controller
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
            $pembelians = pembelian::all();
            return view('admin.pembelian_stok.pembelian',compact('pembelians'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = supplier::all();
        $pembelians = pembelian::all();
        return view('admin/pembelian_stok/modal_create_pembelian',compact('suppliers','pembelians'));
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
        $pembelian = new pembelian;
        $pembelian->nama_produk            = $request->nama_produk;
        $pembelian->id_supplier            = $request->id_supplier;
        $pembelian->jumlah                 = $request->jumlah;
        $pembelian->harga                  = $request->harga;
        if ($pembelian->save()){
            toast('Data pembelian Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data pembelian Gagal Ditambah','error','top-right');
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
        $pembelian = pembelian::find($request->id);
        $suppliers = supplier::all();
        return view('admin/pembelian_stok/modal_edit_pembelian',compact('pembelian','suppliers'));
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
        $pembelian = pembelian::find($id);
        $pembelian->nama_pembelian         = $request->nama_pembelian;
        $pembelian->alamat                 = $request->alamat;
        $pembelian->no_telp                = $request->no_telp;
        $pembelian->email                  = $request->email;
        if ($pembelian->save()){
            toast('Data pembelian Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data pembelian Gagal Diubah','error','top-right');
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
