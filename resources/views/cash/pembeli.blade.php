 <!-- Modal -->
<div class="modal fade" id="pilihPelangganModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Data Pembeli </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table id="tbl-pelanggan" class="table table-hover ">
                <br/>
                <tr>
                    <th>Ktp Pembeli</th>
                    <th>Nama Pembeli</th>
                    <th>Alamat Pembeli</th>
                    <th>Telp Pembeli</th>
                    <th colspan="2">Action</th>
                    
                </tr>
                
                @foreach($pembeli as $key=>$value)
                    <tr>
                      <td>{{ $value->ktp_pembeli }}</td>
                      <td>{{ $value->nama_pembeli }}</td>
                      <td>{{ $value->alamat_pembeli }}</td>
                      <td>{{ $value->telp_pembeli }}</td>
                      <td><button class='pilih-pelanggan'>pilih</button></td>
                    </tr>
                @endforeach
              </table>
            {{-- <form method="post" action="/pelanggan">
                @csrf
                <div class="mb-3">
                    <label for="ktp_pembeli" class="form-label">ktp_pembeli</label>
                    <input type="text" class="form-control col-sm-3" id="ktp_pembeli" placeholder="ktp_pembeli" name="ktp_pembeli">
                  </div> 
                  <div class="mb-3">
                    <label for="nama_pembeli" class="form-label">nama_pembeli</label>
                    <input type="text" class="form-control col-sm-3" id="nama_pembeli" placeholder="nama_pembeli" name="nama_pembeli">
                  </div> 
                  <div class="mb-3">
                    <label for="alamat_pembeli" class="form-label">alamat_pembeli</label>
                    <input type="text" class="form-control col-sm-3" id="alamat_pembeli" placeholder="alamat_pembeli" name="alamat_pembeli">
                  </div> 
                  <div class="mb-3">
                    <label for="telp_pembeli" class="form-label">telp_pembeli</label>
                    <input type="text" class="form-control col-sm-3" id="telp_pembeli" placeholder="telp_pembeli" name="telp_pembeli">
                  </div> 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
            </form> --}}
            </div>
          
        
        
        </div>
      </div>
  </div>
<!--end of modal-->

<!--form data pelanggan-->

<div class="card-header">
    Data Pembeli &nbsp;
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihPelangganModal">
        Pilih 
      </button>
</div>
<div class ="card-body">
    <div class="data-pelanggan">
        <table class="table table-bordered ">
            <tr>
                <td width="10%" class="table-primary" scope="row">No.KTP</td>
                <td width="25%"><input type="text" readonly id="v-ktp" style="border:none"></td>
                <td width="10%" class="table-primary">Nama</td>
                <td width="25%"><span id="v-nama"></span></td>
            </tr>
            <tr>
                <td width="10%" class="table-primary" scope="row">Alamat</td> 
                <td width="25%"><span id="v-alamat"></span></td> 
                <td width="10%" class="table-primary" scope="row">No.Telephone</td> 
                <td width="25%"><span id="v-telp"></span></td> 
            </tr>

        </table>
 </div>

</div>