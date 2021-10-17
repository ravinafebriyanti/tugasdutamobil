<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pembeli::all();
        return view('pelanggan.index', compact(
            'data'

        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new pembeli;
        return view('home.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new pembeli;
        $model->ktp_pembeli= $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->telp_pembeli = $request->telp_pembeli;
        $model->save();

        return redirect('home');
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
    public function edit($ktp_pembeli)
    {
        $model = pembeli::where('ktp_pembeli',$ktp_pembeli)->first();
        return view('pelanggan.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ktp_pembeli)
    {
        $model = pembeli::where('ktp_pembeli',$ktp_pembeli)->first();
        $model->ktp_pembeli= $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->telp_pembeli = $request->telp_pembeli;
        $model->save();

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ktp_pembeli)
    {
        $model = pembeli::where('ktp_pembeli',$ktp_pembeli)->first();
        $model->delete();
        return redirect('/pelanggan'); 
    }
}
