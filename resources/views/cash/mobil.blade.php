<!-- Modal -->
<div class="modal fade" id="pilihMobilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Data Mobil </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <table id="tbl-mobil" class="table-bordered table">
                <br>
                <tr>
                    <th>Kode_mobil</th>
                    <th>Merk</th>
                    <th>Type</th>
                    <th>Warna</th>
                    <th>Harga_mobil</th>
                    <th colspan="2">Action</th>
                    
                </tr>
                @foreach($mobil as $key=>$value)
                    <tr>
                      <td>{{ $value->kode_mobil }}</td>
                      <td>{{ $value->merk }}</td>
                      <td>{{ $value->type }}</td>
                      <td>{{ $value->warna }}</td>
                      <td>{{ $value->harga_mobil }}</td>
                      <td><button class='pilih-mobil'>Pilih</button></td>
                    </tr>
                @endforeach
              </table>   
        </div>
    </div>
 </div>
</div>

 <!-- end of modal -->

 <!--form data pelanggan-->
 <div class="card-header">
    Data Pembeli &nbsp;
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihMobilModal">
        Pilih 
      </button>
</div>
<div class ="card-body">
    <div class="data-mobil">
        <table class="table table-bordered ">
            <tr>
                <td width="10%" class="table-primary" scope="row">Kode Mobil</td>
                <td width="25%"><input type="text" readonly id="v-kodemobil" style="border:none"></td>
                <td width="10%" class="table-primary">Merk</td>
                <td width="25%"><span id="v-merk"></span></td>
            </tr>
            <tr>
                <td width="10%" class="table-primary" scope="row">Type</td> 
                <td width="25%"><span id="v-type"></span></td> 
                <td width="10%" class="table-primary" scope="row">Warna</td> 
                <td width="25%"><span id="v-warna"></span></td> 
            </tr>
            <tr>
                <td width="10%" class="table-primary" scope="row">Harga Mobil</td> 
                <td width="25%"><span id="v-hargamobil"></span></td>
            </tr>

        </table>
 </div>

</div>
<!-- end of form -->
