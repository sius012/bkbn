@extends('adminlte::page')

@section('content')
<div class="container">
    
</div>
<table class="table table-report">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <td>{{$s->nis}}</td>
            <td>{{$s->nama_siswa}}</td>
            <td>{{$s->kelasdanjurusan()}}</td>
            <td>{{$s->jenis_kelamin}}</td>
            <td>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-info"><i class="fas fs-1 fa-info"></i></button>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
<script>
    $(document).ready(function(){
        alert("tes");
    })
</script>


<div class="modal" tabindex="-1" role="dialog" id="">
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