<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\produk;
use App\penjualan;
use App\retur;
use App\pemesanan;

class IndexAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }

    public function index()
    {
        $retur = retur::all();
        $penjualan = penjualan::all();
        $produk = produk::all();
        $pemesanan = DB::table('pemesanan')
            ->join('kategori', 'pemesanan.id_kategori', '=', 'kategori.id')
            ->where('status', '=', null)
            ->select(DB::raw('count(*) as tampil'))
            ->first();
        return view('Admin/index', compact('produk','penjualan','retur','pemesanan'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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

    public function chart()
      {
        $result = DB::table('penjualan')
        ->join('produk', 'penjualan.id_produk', '=', 'produk.id')
        ->select(DB::raw('sum(jumlah) as tampil'),'nama_produk')
        ->groupBy('produk.nama_produk')
            
            ->get();
        return response()->json($result);
      }
}
