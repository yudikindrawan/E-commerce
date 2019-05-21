<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\kategori;
use App\size;

class produkController extends Controller
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
       
            $produks = produk::all();
            return view('admin.produk.produk',compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategoris = kategori::all();
        $sizes = size::all();
        return view('admin/produk/modal_create_produk',compact('kategoris','sizes'));
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
        $Produk = new produk;
        $Produk->nama_produk            = $request->nama_produk;
        $Produk->id_kategori            = $request->id_kategori;
        $Produk->id_size                = $request->id_size;


        if ($Produk->stok                   = $request->stok >0){
            $Produk->stok                   = $request->stok;
            $Produk->keterangan             = "Tersedia";
            $Produk->harga                  = $request->harga;

            $file       = $request->file('desain');
            $fileName   = uniqid().$file->getClientOriginalName();
            $request->file('desain')->move("image/", $fileName);
            $Produk->desain = $fileName;

            $Produk->save();
            toast('Data Produk Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            $Produk->stok                   = $request->stok;
            $Produk->keterangan             = "Tidak Tersedia";
            $Produk->harga                  = $request->harga;

            $file       = $request->file('desain');
            $fileName   = uniqid().$file->getClientOriginalName();
            $request->file('desain')->move("image/", $fileName);
            $Produk->desain = $fileName;

            $Produk->save();
            toast('Data Produk Berhasil Ditambah','success','top-right');
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
    public function edit(request $request)
    {
        $produk = produk::find($request->id);
        $kategoris = kategori::all();
        $sizes = size::all();
        return view('admin/produk/modal_edit_produk', compact('produk','kategoris','sizes'));
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
        $Produk = produk::find($id);
        $Produk->nama_produk            = $request->nama_produk;
        $Produk->id_kategori            = $request->id_kategori;
        $Produk->id_size                = $request->id_size;
        if ($Produk->stok                   = $request->stok >0){
            $Produk->stok                   = $request->stok;
            $Produk->keterangan             = "Tersedia";
            $Produk->harga                  = $request->harga;
            $Produk->save();
            toast('Data Produk Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            $Produk->stok                   = $request->stok;
            $Produk->keterangan             = "Tidak Tersedia";
            $Produk->harga                  = $request->harga;
            $Produk->save();
            toast('Data Produk Berhasil Diubah','success','top-right');
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
