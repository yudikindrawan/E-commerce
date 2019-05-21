<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemesanan;
use App\pemesanan_size;
use App\kategori;
use DB;

class pemesananController extends Controller
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
        return view('admin.pemesanan.pemesanan', compact('kategoris'));
    }
     public function indextampil()
    {
        //
        $pemesanan = DB::table('pemesanan')
          ->join('kategori', 'pemesanan.id_kategori', '=', 'kategori.id')
          ->join('pemesanan_size','pemesanan_size.id_size', '=', 'pemesanan_size.id')
          ->select(DB::raw('count(*) as tampil'))
          ->first();

        $pemesanans = DB::table('pemesanan')
          ->join('kategori', 'pemesanan.id_kategori', '=', 'kategori.id')
          ->join('pemesanan_size','pemesanan_size.id_size', '=', 'pemesanan_size.id')
          ->select('pemesanan.*','kategori.nama_kategori','pemesanan_size.id_size')

          ->paginate(15);

        return view('admin.pemesanan.tampilpemesanan', compact('pemesanan','pemesanans'));
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
        
        $pemesanan = new pemesanan;
        $pemesanan->nama_customer            = $request->nama_customer;
        $pemesanan->nama_pem_produk          = $request->nama_pem_produk;
        $pemesanan->id_kategori              = $request->id_kategori;
        $pemesanan->jumlah                   = $request->jumlah;
        $pemesanan->alamat                   = $request->alamat;
        $pemesanan->email                    = $request->email;
        $pemesanan->no_telp                  = $request->no_telp;
        $pemesanan->variasi                  = $request->variasi;


            $file       = $request->file('desain');
            $fileName   = uniqid().$file->getClientOriginalName();
            $request->file('desain')->move("image/", $fileName);
            $pemesanan->desain = $fileName;

        $pemesanan =$pemesanan->save();

        $findId = pemesanan::orderBy('id','desc')->first();
        $id = $findId->id;
        $pemesanan_size = DB::table('pemesanan_size')->insert(array(
            [
                'id_pemesanan'=>$id,
                'id_size'=>1,
                'jumlah'=>$request->xs
            ],
            [
                'id_pemesanan'=>$id,
                'id_size'=>2,
                'jumlah'=>$request->s
            ],
            [
                'id_pemesanans'=>$id,
                'id_size'=>3,
                'jumlah'=>$request->m
            ],
            [
                'id_pemesanan'=>$id,
                'id_size'=>4,
                'jumlah'=>$request->l
            ],
            [
                'id_pemesanan'=>$id,
                'id_size'=>5,
                'jumlah'=>$request->xl
            ],
            [
                'id_pemesanan'=>$id,
                'id_size'=>6,
                'jumlah'=>$request->xxl
            ])
        );

        if ($pemesanan && $pemesanan_size){
            toast('Data Pemesanan Berhasil Ditambah','success','top-right');
            var_dump($pemesanan);
            return redirect()->back();
        }else{
            toast('Data Pemesanan Gagal Ditambah','error','top-right');
            var_dump($pemesanan);
            return redirect()->back();
        }
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampil(Request $request)
    {
        //

        $pemesanan = DB::table('pemesanan')
            ->join('kategori', 'pemesanan.id_kategori', '=', 'kategori.id')
             ->where('status', '=', null)
            ->select(DB::raw('count(*) as tampil'))
            ->first();

        $pemesanans = DB::table('pemesanan')
            ->join('kategori', 'pemesanan.id_kategori', '=', 'kategori.id')
            ->where('status', '=', null)
            ->select('pemesanan.*','kategori.nama_kategori')
            ->paginate(15);

        return view('admin/pemesanan/indexpemesanan', compact('pemesanan','pemesanans'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setuju(Request $request)
    {
        //
        $pemesanan = pemesanan::find($request->id);
        return view('admin/pemesanan/modal_setuju_pemesanan',compact('pemesanan'));
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
        $pemesanan = pemesanan::find($id);
        $pemesanan->status                  = 'Berhasil diproses';
        if ($pemesanan->save()){
            toast('Data pemesanan Berhasil Diproses','success','top-right');
            return redirect()->back();
        }else{
            toast('Data pemesanan Gagal Diproses','error','top-right');
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
