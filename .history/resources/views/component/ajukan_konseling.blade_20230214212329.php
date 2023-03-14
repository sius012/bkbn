<div class="modal fade" tabindex="-1" role="dialog" id="modal-konseling">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
                <label for="">Konselor</label>
                <select name="konselor" id="" class="form-control">
                    @foreach($admin as $i => $adm)
                        <option value="">{{$adm->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  <script>
    
  </script>