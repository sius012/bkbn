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
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-catatan-konselor"><i class="fa fa-check p-0"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-catatan-konselor">
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
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Catatan</label>
            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection