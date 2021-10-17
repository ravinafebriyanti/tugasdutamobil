<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = mobil::all();
        return view('home.index', compact(
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
        $model = new mobil;
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
        $model = new mobil;
        $model->kode_mobil = $request->kode_mobil;
        $model->merk = $request->merk;
        $model->type = $request->type;
        $model->warna = $request->warna;
        $model->harga_mobil = $request->harga_mobil;
        $model->gambar = $request->gambar;
        $model->save();

        return redirect('home');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function show($kode_mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_mobil)
    {
        $model = mobil::where('kode_mobil',$kode_mobil)->first();
        return view('home.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mobil)
    {
        $model = mobil::where('kode_mobil',$kode_mobil)->first();
        $model->kode_mobil = $request->kode_mobil;
        $model->merk = $request->merk;
        $model->type = $request->type;
        $model->warna = $request->warna;
        $model->harga_mobil = $request->harga_mobil;
        $model->gambar = $request->gambar;
        $model->save();  
        return redirect('home'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kode_mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mobil)
    {
        $model = mobil::where('kode_mobil',$kode_mobil)->first();
        $model->delete();
        return redirect('home'); 
    }
}
