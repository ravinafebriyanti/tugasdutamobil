@extends('templates/header')

@section('content')
    <br/>
    <form method="POST" action="{{ url('home') }}">
        @csrf
        Kode_Mobil  :<input type="text" name="kode_mobil"><br/>
        Merk        :<input type="text" name="merk"><br/>
        Type        :<input type="text" name="type"><br/>
        Warna       :<input type="text" name="warna"><br/>
        Harga_Mobil :<input type="text" name="harga_mobil"><br/>
        Gambar      :<input type="text" name="gambar"><br/>


        <button type="submit">save</button>

    </form>
@endsection