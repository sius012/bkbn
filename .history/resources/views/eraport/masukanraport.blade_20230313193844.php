@extends('adminlte::page')

@section('content')
<div class="p-3">
    <div class="row">
        @foreach($kelas as $k => $kls)
        @foreach ($kls as $item)
          <div class="col-md-4">
            <div class="card p-3">
              <h3>  {{$item['kelas_display']}}</h3>
              <p>Angkatan {{$item['angkatan']}}</p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route("raport.kelas.detail", ['jurusan'=>])}}"></a><button type="button" class="btn btn-primary-bb"><i class="fa fa-print"></i></button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
            </div>
          </div>
        @endforeach 
    @endforeach
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-input-raport">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Masukan Raport</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('inject-raport')}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
           
                @csrf
                <input type="hidden" name="param">
                <div class="form-group">
                    <label for="">Masukan tanggal input</label>
                    <input type="datetime-local" datetime value="" class="form-control" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="">Masukan File Excel</label>
                    <input type="file" class="form-control-file" name="file" required>
                </div>

            
        </div>
        <div class="modal-footer">
          <button type="sumbit" class="btn btn-primary-bb">Validasi</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
     </form>
      </div>
    </div>
  </div>


  <div class="modal fade" tabindex="-1" role="dialog" id="modal-cetak-raport">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Unduh Raport</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('eraport.unduh')}}" method="get">
        <div class="modal-body">
                <input type="hidden" name="param2">
                <div class="form-group">
                  <label for="">Dari</label>
                  <input type="date" datetime  class="form-control" name="dari" required>
              </div>
              <div class="form-group">
                <label for="">Sampai</label>
                <input type="date" datetime  class="form-control" name="sampai" required>
            </div>

            
        </div>
        <div class="modal-footer">
          <button type="sumbit" class="btn btn-primary-bb">Unduh</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
     </form>
      </div>
    </div>
  </div>

@endsection



@section("adminlte_js")
  <script>
    $(document).ready(function(){
       $(".btn-kelas").click(function(){
        $("input[name=param]").val($(this).val());
       });

       $(".btn-class-cetak").click(function(){
        alert($(this).val());
        $("input[name=param2]").val($(this).val());
       });
    });
  </script>
@endsection
