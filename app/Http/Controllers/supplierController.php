<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use App\user;

class supplierController extends Controller
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
            $suppliers = supplier::all();
            return view('admin.supplier.supplier',compact('suppliers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/supplier/modal_create_supplier');
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
        $supplier = new supplier;
        $supplier->nama_supplier          = $request->nama_supplier;
        $supplier->alamat                 = $request->alamat;
        $supplier->no_telp                = $request->no_telp;
        $supplier->email                  = $request->email;
        if ($supplier->save()){
            toast('Data Supplier Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Supplier Gagal Ditambah','error','top-right');
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
        $supplier = supplier::find($request->id);
        return view('admin/supplier/modal_edit_supplier',compact('supplier'));
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
        $supplier = supplier::find($id);
        $supplier->nama_supplier          = $request->nama_supplier;
        $supplier->alamat                 = $request->alamat;
        $supplier->no_telp                = $request->no_telp;
        $supplier->email                  = $request->email;
        if ($supplier->save()){
            toast('Data supplier Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Supplier Gagal Diubah','error','top-right');
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
