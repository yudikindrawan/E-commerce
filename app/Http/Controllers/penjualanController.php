<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\customer;
use App\produk;
use App\retur;
use App\user;
use App\size;
use App\kategori;
use DB;

class penjualanController extends Controller
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
        $cari = $request->post('cari');
        $berdasarkan = $request->post('berdasarkan');
        if ($cari=="" or $berdasarkan=="") {
            $penjualans = penjualan::paginate(15);
            return view('admin.penjualan.penjualan',compact('penjualans'));
        }else{
            $penjualans = penjualan::where($berdasarkan, 'LIKE', '%' . $cari . '%')->paginate(15);
            $penjualans ->appends($request->only('cari','berdasarkan'));
            return view('admin.penjualan.penjualan',compact('penjualans'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
         $customers   = customer::all();
         $produks     = produk::all();
         $sizes       = size::all();
         $kategoris   = kategori::all();
        return view('admin/penjualan/modal_create_penjualan',compact('customers','produks','sizes','kategoris'));
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
        $penjualan = new penjualan;
        $penjualan->id_produk                   = $request->id_produk;
        $penjualan->id_customer                 = $request->id_customer;
        $p=produk::select('stok')->where('id', $request->id_produk)->first();
        if ( $penjualan->jumlah                 = $request->jumlah == $p['stok']) {
            $penjualan->jumlah                  = $request->jumlah;
            $penjualan->no_telp                 = $request->no_telp;
            $penjualan->email                   = $request->email;
            $penjualan->alamat                  = $request->alamat;
            $stok=DB::table('produk')->select('stok','keterangan')-> where ('id', $request->id_produk)->update(['stok'=> $p['stok']-$request->jumlah,'keterangan'=>'Tidak Tersedia']);
        }elseif ($penjualan->jumlah                  = $request->jumlah > $p['stok']){
                toast('Stok Tidak Tersedia','success','top-right');
                return redirect()->back();
            
        }else{
            $penjualan->jumlah                  = $request->jumlah;
            $penjualan->no_telp                 = $request->no_telp;
            $penjualan->email                   = $request->email;
            $penjualan->alamat                  = $request->alamat;
            $stok=DB::table('produk')->select('stok')-> where ('id', $request->id_produk)->update(['stok'=> $p['stok']-$request->jumlah]);}
            $penjualan->save();
                toast('Data penjualan Berhasil Ditambah','success','top-right');
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
        //
        $penjualan = penjualan::find($request->id);
        $customers = customer::all();
        $produks = produk::all();  
        $sizes       = size::all();
        return view('admin/penjualan/modal_edit_penjualan',compact('penjualan','customers','produks','sizes'));
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
        $penjualan = penjualan::find($id);
        $penjualan->id_produk               = $request->id_produk;
        $penjualan->id_customer             = $request->id_customer;
        $p=produk::select('stok')->where('id', $request->id_produk)->first();
        if ( $penjualan->jumlah                 = $request->jumlah == $p['stok']) {
            $penjualan->jumlah                  = $request->jumlah;
            $penjualan->no_telp                 = $request->no_telp;
            $penjualan->email                   = $request->email;
            $penjualan->alamat                  = $request->alamat;
            $stok=DB::table('produk')->select('stok','keterangan')-> where ('id', $request->id_produk)->update(['stok'=> $p['stok']-$request->jumlah,'keterangan'=>'Tidak Tersedia']);
        }elseif ($penjualan->jumlah                  = $request->jumlah > $p['stok']){
                toast('Stok Tidak Tersedia','success','top-right');
                return redirect()->back();
            
        }else{
            $penjualan->jumlah                  = $request->jumlah;
            $penjualan->no_telp                 = $request->no_telp;
            $penjualan->email                   = $request->email;
            $penjualan->alamat                  = $request->alamat;
            $stok=DB::table('produk')->select('stok')-> where ('id', $request->id_produk)->update(['stok'=> $p['stok']-$request->jumlah]);}
            $penjualan->save();
                toast('Data penjualan Berhasil Diubah','success','top-right');
                return redirect()->back();
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

    public function cari(Request $request){
        $p=customer::select('alamat','no_telp','email')->where('id',$request->id)->first();

        return Response()->json($p);
    }

    public function retur(Request $request){
        $penjualan = penjualan::find($request->id);
        return view('admin/penjualan/modal_retur_penjualan', compact('penjualan'));
    }

    public function returupdate(Request $request, $id)
    {
        //
        $penjualan = penjualan::find($id);

        $retur = new retur;
        $retur->id_produk = $penjualan->id_produk;
        $retur->id_customer = $penjualan->id_customer;
        $retur->jumlah = $penjualan->jumlah;
        $retur->save();
        $penjualan->delete();
                toast('Data penjualan Berhasil Diretur','success','top-right');
                return redirect()->back();
    }

     public function invoice(Request $request){
        
        return view('admin/penjualan/invoice_penjualan');
    }

}
