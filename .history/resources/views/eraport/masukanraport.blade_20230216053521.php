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
        <div class="col"><button class="btn btn-primary-bb btn-sm" data-toggle="">Input Raport</button>
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
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection