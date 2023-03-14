@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card m-2 p-3" style="width:300px">
        <div class="row">
            <div class="col">
                <h3 class="m-0">{{$item['kelas_display']}}</h3>
                <span class="badge">Angkatan {{$item  ["angkatan"]}}</span>
            </div>
        </div>
       <div class="row mt-1">
        <div class="col"><button class="btn btn-primary-bb btn-sm " data-toggle="modal" data-target="#modal-input-raport">Input Raport</button>
            <button class="btn btn-secondary btn-sm">E-Raport</button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-users"></i></button>
        </div>

       </div>
       </div>
   @endforeach
@endforeach
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
        <div class="modal-body">
            <form action="{{url('inject-raport')}}" method="post" emctype="multipart/form-data">
                @csrf
                <input type="hidden" name="param">
                <div class="form-group">
                    <label for="">Masukan tanggal input</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Masukan File Excel</label>
                    <input type="file" class="form-control-file">
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary-bb">Validasi</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection



@section("adminlte_js")
  <script>
    $(document).ready(function(){
       $("input[name=param]")
    });
  </script>
@endsection