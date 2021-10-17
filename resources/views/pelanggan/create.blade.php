@extends('templates/header')

@section('content')
    <br/>
    <form method="POST" action="{{ url('home') }}">
        @csrf
        Ktp Pembeli     :<input type="text" name="ktp_pembeli"><br/>
        Nama Pembeli    :<input type="text" name="nama_pembeli"><br/>
        Alamat Pembeli  :<input type="text" name="alamat_pembeli"><br/>
        Telp Pembeli   :<input type="text" name="telp_pembeli"><br/>
       

        <button type="submit">save</button>

    </form>
@endsection