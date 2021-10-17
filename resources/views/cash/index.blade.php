@extends('templates/header')

@section('content')
<div class="card">
    <div class="card-body">
     @if ($errors->any())
          <div class="alert-danger alert" role="alert" id="error-alert">
            <button type="button" class="close" data-dismiss="alert" arial-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $errors }}</li>
              @endforeach    
            </ul>
          </div>
      @endif
    </div>
  </div>
    
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          
        </div>
        <div>
            @include('cash/pembeli')
            @include('cash/mobil')
            {{-- @include('cash/cash') --}}
            
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
   

  </section>

@endsection   


@push('script')
<script>

$(document).ready( function () {
    $('#tbl-pelanggan').DataTable();


    $('#tbl-mobil').DataTable();

    $('#tbl-pelanggan').on('click','.pilih-pelanggan', function(){
        let ele = $(this).closest('tr');
        let ktp = ele.find('td:eq(0)').text();
        let nama = ele.find('td:eq(1)').text();
        let alamat = ele.find('td:eq(2)').text();
        let telp = ele.find('td:eq(3)').text();
        $('#v-nama').text(nama)
        $('#v-ktp').val(ktp)
        $('#v-alamat').text(alamat)
        $('#v-telp').text(telp)
        $('#pilihPelangganModal').modal('hide')
      });

      $('#tbl-mobil').on('click','.pilih-mobil', function(){
        let ele = $(this).closest('tr');
        let kodemobil = ele.find('td:eq(0)').text();
        let merk = ele.find('td:eq(1)').text();
        let type = ele.find('td:eq(2)').text();
        let warna = ele.find('td:eq(3)').text();
        let hargamobil = ele.find('td:eq(4)').text();
        $('#v-merk').text(merk)
        $('#v-kodemobil').val(kodemobil)
        $('#v-type').text(type)
        $('#v-warna').text(warna)
        $('#v-hargamobil').text(hargamobil)
        $('#pilihMobilModal').modal('hide')
      });
} );

</script>

@endpush