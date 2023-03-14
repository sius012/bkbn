@extends('adminlte::page')


@section("content")
<table class="table table-striped table-light">
    <thead>
        <tr>
            <th></th>
            <th>Nama Siswa</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajuanmasuk as $i => $pm)
            <tr>
                <td></td>
                <td>{{$pm->pengaju->name}}</td>
                <td>{{$pm->keterangan}}</td>
                <td>{{$pm->tanggal}}</td>
                <td>{{$pm->status}}</td>
                <td>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-times p-0"></i></button>
                    <button class="btn btn-success btn-sm show-modal-catatan" data-toggle="modal" value="{{$pm->id_pk}}" data-target="#modal-catatan-konselor"><i class="fa fa-check p-0"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-catatan-konselor">
    <form action="{{url('/kirimcatatan')}}" method="POST">
        @csrf
    <input type="hidden" name="id_pk" id="idtanggapan-field" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Buat Catatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Tanggal</label>
            <input type="datetime-local" class="form-control" required name="tanggal">
          </div>
          <div class="form-group">
            <label for="">Catatan</label>
            <textarea name="catatan" class="form-control" id="" cols="20" rows="5" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Kirim</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
</form>
  </div>

@section('adminlte_js')
  <script>
    $(document).ready(function(){
        $(".show-modal-catatan").click(function(){
            alert("tes");
            $("#idtanggapan-field").val($(this).val());
        });
    });
  </script>
  @endsection
@endsection