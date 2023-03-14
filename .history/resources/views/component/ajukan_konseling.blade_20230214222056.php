<form action="{{route("konseling.buat")}}" method="post">
<div class="modal fade" tabindex="-1" role="dialog" id="modal-konseling">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ajukan Konseling</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
            <div class="form-group">
                @csrf
                <label for="">Konselor</label>
                <select name="konselor" id="konselor-select" class="form-control">
                    @foreach($admin as $i => $adm)
                        <option value="{{$adm->id}}">{{$adm->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Masukan Keterangan</label>
                <input type="text" class="form-control" name='keterangan'>
            </div>
            <div class="form-group">
                
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary-bb">Ajukan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
 
    </div>
  </div>
</form>
  

  <script>
   
  </script>