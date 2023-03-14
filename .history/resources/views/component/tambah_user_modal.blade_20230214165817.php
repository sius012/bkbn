
<form action="{{route('tambah-user')}}" method="post">
<div class="modal fade" tabindex="-1" role="dialog" id="tambah-user-modal">
    
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @csrf
            <input type="hidden" value="{{$role}}" name="role">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" name="nama">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">NIK</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ctnh: 1213232K4 name="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Email</label>
             <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Sandi</label>
              <input type="password" class='form-control'>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Kirim</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>