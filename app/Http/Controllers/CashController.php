<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use App\Models\Mobil;
use App\Models\cash;
use Illuminate\Http\Request;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['mobil'] = Mobil::all();
        $data['pembeli'] = Pembeli::all();

        return view('cash/index', $data);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function show(cash $cash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function edit(cash $cash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cash $cash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function destroy(cash $cash)
    {
        //
    }
}
