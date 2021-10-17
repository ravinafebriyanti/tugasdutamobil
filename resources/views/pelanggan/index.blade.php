@extends('templates/header')

@section('content')
    <br/>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

    
    <table class="table-bordered table">
      <br/>
      <tr>
          <th>Ktp Pembeli</th>
          <th>Nama Pembeli</th>
          <th>Alamat Pembeli</th>
          <th>Telp Pembeli</th>
          <th colspan="2">Action</th>
          
      </tr>
      
      @foreach($data as $key=>$value)
          <tr>
            <td>{{ $value->ktp_pembeli }}</td>
            <td>{{ $value->nama_pembeli }}</td>
            <td>{{ $value->alamat_pembeli }}</td>
            <td>{{ $value->telp_pembeli }}</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">
                Update Data
              </button>
              {{-- <a class="btn btn-info" href="{{ url('home/'.$value->kode_mobil.'/edit') }}">Update</a></td> --}}
            </td>
          
            <td>
          <form action="{{ url('pelanggan/'.$value->ktp_pembeli) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm ('hapus data?')">Hapus</button>
          </form>
            </td>
          </tr>
      @endforeach
    </table>
{{-- <section class="content-header">
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
   

  </section> --}}

@endsection   
@include('pelanggan/form') 
@push('script')

@endpush