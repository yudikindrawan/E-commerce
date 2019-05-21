<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\size;
use App\user;

class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $sizes = size::all();
            return view('admin.size.size', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/size/moda_create_size');
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
        $size = new size;
        $size->nama_size          = $request->nama_size;
        if ($size->save()){
            toast('Data Size Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Size Gagal Ditambah','error','top-right');
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
        $size = size::find($request->id);
        return view('admin/size/modal_edit_size',compact('size'));
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
        $size = size::find($id);
        $size->nama_size          = $request->nama_size;     
        if ($size->save()){
            toast('Data Size Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Size Gagal Diubah','error','top-right');
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
