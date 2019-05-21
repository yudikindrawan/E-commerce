<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\user;

class customerController extends Controller
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
         
            $customers = customer::all();
            return view('admin.customer.customer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin/customer/modal_create_customer');
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
        $customer = new customer;
        $customer->nama_customer          = $request->nama_customer;
        $customer->alamat                 = $request->alamat;
        $customer->no_telp                = $request->no_telp;
        $customer->email                  = $request->email;
        if ($customer->save()){
            toast('Data Customer Berhasil Ditambah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Customer Gagal Ditambah','error','top-right');
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
        $customer = customer::find($request->id);
        return view('admin/customer/modal_edit_customer',compact('customer'));
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
        $customer = customer::find($id);
        $customer->nama_customer          = $request->nama_customer;
        $customer->alamat                 = $request->alamat;
        $customer->no_telp                = $request->no_telp;
        $customer->email                  = $request->email;
        if ($customer->save()){
            toast('Data Customer Berhasil Diubah','success','top-right');
            return redirect()->back();
        }else{
            toast('Data Customer Gagal Diubah','error','top-right');
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
