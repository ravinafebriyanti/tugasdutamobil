@extends('templates/header')

@section('content')
    
    <!-- Button trigger modal -->
  <div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data
    </button>
  </div>

    <table class="table-bordered table">
      <br>
      <tr>
          <th>Kode_mobil</th>
          <th>Merk</th>
          <th>Type</th>
          <th>Warna</th>
          <th>Harga_mobil</th>
          <th>Gambar</th>
          <th colspan="2">Action</th>
          
      </tr>
      @foreach($data as $key=>$value)
          <tr>
            <td>{{ $value->kode_mobil }}</td>
            <td>{{ $value->merk }}</td>
            <td>{{ $value->type }}</td>
            <td>{{ $value->warna }}</td>
            <td>{{ $value->harga_mobil }}</td>
            <td><img src="{{ asset('img') }}/{{ $value->gambar }}" width="200px"></td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">
                Update Data
              </button>
              {{-- <a class="btn btn-info" href="{{ url('home/'.$value->kode_mobil.'/edit') }}">Update</a></td> --}}
            </td>
          
            <td>
          <form action="{{ url('home/'.$value->kode_mobil) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm ('hapus data?')">Hapus</button>
          </form>
            </td>
          </tr>
      @endforeach
    </table>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
   

  </section>

@endsection   
@include('home/form')
@push('script')

@endpush