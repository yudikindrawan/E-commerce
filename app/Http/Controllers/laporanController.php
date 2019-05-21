<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Response;
use View;
use Barryvdh\DomPDF\Facade as PDF; 

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.laporan.laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


                
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cetak(Request $request)
    {
        $inp = $request->input('awal');
        $inpp = $request->input('akhir');
        

        $produks = DB::table('produk')
            ->join('kategori','produk.id_kategori','=','kategori.id')
            ->join('size','produk.id_size','=','size.id')
            ->whereBetween('produk.created_at',[$inp,$inpp])
            ->select('produk.*','kategori.nama_kategori','size.nama_size')
            ->get();

        // $view = View('admin/laporan/tampil',compact('produks');
        // $contents = $view->render();
        // $pdf = PDF::loadView('admin/laporan/tampil',compact('produk'));
        //print_r($produks);
        // return $pdf->download('invoice.pdf');
        return Response::json($produks);
        // print_r($tanggal);
    }

     public function tampildata(Request $request, $awal, $akhir)
    {     
        $produks = DB::table('produk')
            ->join('kategori','produk.id_kategori','=','kategori.id')
            ->join('size','produk.id_size','=','size.id')
            ->whereBetween('produk.created_at',[$awal, $akhir])
            ->select('produk.*','kategori.nama_kategori','size.nama_size')
            ->get();

        $pdf = PDF::loadView('admin/laporan/tampil',compact('produks'));
        return $pdf->download('Laporanproduk.pdf');
    }
}
