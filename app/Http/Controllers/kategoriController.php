<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\user;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $kategoris = kategori::all();
            return view('admin.kategori.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/kategori/modal_create_kategori');
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
        $kategori = new kategori;
        $kategori->nama_kategori          = $request->nama_kategori;
        if ($kategori->save()){
            toast('Data Kategori Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Kategori Gagal Ditambah','error','top-right');
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
        $kategori = kategori::find($request->id);
        return view('admin/kategori/modal_edit_kategori',compact('kategori'));
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
        $kategori = kategori::find($id);
        $kategori->nama_kategori          = $request->nama_kategori;     
        if ($kategori->save()){
            toast('Data Kategori Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Kategori Gagal Diubah','error','top-right');
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
