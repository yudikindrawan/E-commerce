<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use View;
use Barryvdh\DomPDF\Facade as PDF; 

class laporanpenjualanController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.laporanpenjualan.tampilan');
    }

    public function cetak(Request $request)
    {
        $inp = $request->input('awal');
        $inpp = $request->input('akhir');
        

        $penjualans = DB::table('penjualan')
            ->join('produk','penjualan.id_produk','=','produk.id')
            ->join('customer','penjualan.id_customer','=','customer.id')
            ->whereBetween('penjualan.created_at',[$inp,$inpp])
            ->select('penjualan.*','produk.nama_produk','customer.nama_customer')
            ->get();

        // $view = View('admin/laporan/tampil',compact('produks');
        // $contents = $view->render();
        // $pdf = PDF::loadView('admin/laporan/tampil',compact('produk'));
        //print_r($produks);
        // return $pdf->download('invoice.pdf');
        return Response::json($penjualans);
        // print_r($tanggal);
    }

     public function tampildata(Request $request, $awal, $akhir)
    {     
        $penjualans = DB::table('penjualan')
            ->join('produk','penjualan.id_produk','=','produk.id')
            ->join('customer','penjualan.id_customer','=','customer.id')
            ->whereBetween('penjualan.created_at',[$awal,$akhir])
            ->select('penjualan.*','produk.nama_produk','customer.nama_customer')
            ->get();

        $pdf = PDF::loadView('admin/laporanpenjualan/cetak',compact('penjualans'));
        return $pdf->download('Laporanpenjualan.pdf');
    }
}
