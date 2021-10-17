<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="/home">
            @csrf
            <div class="mb-3">
                <label for="kode_mobil" class="form-label">Kode_mobil</label>
                <input type="text" class="form-control col-sm-3" id="kode_mobil" placeholder="kode_mobil" name="kode_mobil">
              </div> 
              <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control col-sm-3" id="merk" placeholder="merk" name="merk">
              </div> 
              <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control col-sm-3" id="type" placeholder="type" name="type">
              </div> 
              <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control col-sm-3" id="warna" placeholder="warna" name="warna">
              </div> 
              <div class="mb-3">
                <label for="harga_mobil" class="form-label">Harga_Mobil</label>
                <input type="text" class="form-control col-sm-3" id="harga_mobil" placeholder="harga_mobil" name="harga_mobil">
              </div> 
              <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control col-sm-3" id="gambar" placeholder="gambar" name="gambar">
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
        <h5 class="modal-title" id="exampleModalLabel">Update Data Mobil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

         

      <form method="POST" action="{{ url('home/'.$value->kode_mobil) }}">
          @csrf
          <input type="hidden" name="_method" value="PATCH"> 
          <div class="mb-3">
              <label for="kode_mobil" class="form-label">Kode_mobil</label>
              <input type="text" class="form-control col-sm-3" id="kode_mobil" placeholder="kode_mobil" name="kode_mobil" value="{{ $value->kode_mobil }}">
            </div> 
            <div class="mb-3">
              <label for="merk" class="form-label">Merk</label>
              <input type="text" class="form-control col-sm-3" id="merk" placeholder="merk" name="merk" value="{{ $value->merk }}">
            </div> 
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control col-sm-3" id="type" placeholder="type" name="type" value="{{ $value->type }}">
            </div> 
            <div class="mb-3">
              <label for="warna" class="form-label">Warna</label>
              <input type="text" class="form-control col-sm-3" id="warna" placeholder="warna" name="warna" value="{{ $value->warna }}"  >
            </div> 
            <div class="mb-3">
              <label for="harga_mobil" class="form-label">Harga_Mobil</label>
              <input type="text" class="form-control col-sm-3" id="harga_mobil" placeholder="harga_mobil" name="harga_mobil" value="{{ $value->harga_mobil }}" >
            </div> 
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control col-sm-3" id="gambar" placeholder="gambar" name="gambar" value="{{ $value->gambar }}">
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