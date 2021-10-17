<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="/pelanggan">
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
          </form>
        </div>
          
        
        
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Data Pelanggan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="/pelanggan">
            @csrf
            <div class="mb-3">
                <label for="ktp_pembeli" class="form-label">ktp_pembeli</label>
                <input type="text" class="form-control col-sm-3" id="ktp_pembeli" placeholder="ktp_pembeli" name="ktp_pembeli" value="{{ $value->ktp_pembeli }}" >
              </div> 
              <div class="mb-3">
                <label for="nama_pembeli" class="form-label">nama_pembeli</label>
                <input type="text" class="form-control col-sm-3" id="nama_pembeli" placeholder="nama_pembeli" name="nama_pembeli" value="{{ $value->nama_pembeli }}" >
              </div> 
              <div class="mb-3">
                <label for="alamat_pembeli" class="form-label">alamat_pembeli</label>
                <input type="text" class="form-control col-sm-3" id="alamat_pembeli" placeholder="alamat_pembeli" name="alamat_pembeli" value="{{ $value->alamat_pembeli }}">
              </div> 
              <div class="mb-3">
                <label for="telp_pembeli" class="form-label">telp_pembeli</label>
                <input type="text" class="form-control col-sm-3" id="telp_pembeli" placeholder="telp_pembeli" name="telp_pembeli" value="{{ $value->telp_pembeli }}">
              </div> 
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
        </div>
          
        
        
      </div>
    </div>
</div>