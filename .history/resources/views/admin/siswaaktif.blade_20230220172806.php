@extends('adminlte::page')

@section('content')
<div class="container p-2">
  
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary-bb mb-3">Tambah Data Siswa</button>
               <div class="row">
                <div class="col-sm">
                    <label for="">Pilih Kelas</label>
                    <select name="" id="" class="form-control">
                        <option value="
                        "></option>
                    </select>
                </div>
                <div class="col-sm">
                    <label for="">Pilih Jurusan</label>
                    <select name="" id="" class="form-control">
                        <option value="
                        "></option>
                    </select>
                </div>
                <div class="col-sm">
                    <label for="">Pilih Angkatan</label>
                    <select name="" id="" class="form-control">
                        <option value="
                        "></option>
                    </select>
                </div>
                </div>
            </div>
        </div>
    
</div>
<div class="container" style="overflow-x: scroll">
    <table class="table table-striped table-light    m-3 ">
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
                           <a href="{{url('/detailsiswa/'.$s->nis)}}"> <button class="btn btn-info"><i class="fas fs-1 fa-info"></i></button></a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="modal">
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