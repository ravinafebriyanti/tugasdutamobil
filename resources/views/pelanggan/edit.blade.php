@extends('templates/header')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pelanggan/'.$model->ktp_pembeli) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        ktp_pembeli     :<input type="text" name="ktp_pembeli" value="{{ $model->ktp_pembeli }}"><br/>
        nama_pembeli    :<input type="text" name="nama_pembeli" value="{{ $model->nama_pembeli }}" ><br/>
        alamat_pembeli  :<input type="text" name="alamat_pembeli" value="{{ $model->alamat_pembeli}}" ><br/>
        telp_pembeli    :<input type="text" name="telp_pembeli" value="{{ $model->telp_pembeli }}"  ><br/>
        

        <button type="submit">save</button>

    </form>
@endsection