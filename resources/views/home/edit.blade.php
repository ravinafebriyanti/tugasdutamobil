@extends('templates/header')

@section('content')
    <br/>
    <form method="POST" action="{{ url('home/'.$model->kode_mobil) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Kode_Mobil  :<input type="text" name="kode_mobil" value="{{ $model->kode_mobil }}"><br/>
        Merk        :<input type="text" name="merk" value="{{ $model->merk }}" ><br/>
        Type        :<input type="text" name="type" value="{{ $model->type }}" ><br/>
        Warna       :<input type="text" name="warna" value="{{ $model->warna }}"  ><br/>
        Harga_Mobil :<input type="text" name="harga_mobil" value="{{ $model->harga_mobil }}"><br/>
        Gambar      :<input type="text" name="gambar" value="{{ $model->gambar }}"><br/>


        <button type="submit">save</button>

    </form>
@endsection