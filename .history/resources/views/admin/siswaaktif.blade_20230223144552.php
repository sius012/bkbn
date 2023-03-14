@extends('adminlte::page')

@section('content')
<div class="container p-2">
  
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary-bb mb-3" data-toggle="modal" data-target="#modal-tambah-siswa">Tambah Data Siswa</button>
               <div class="row">
                <div class="col-sm">
                    <label for="">Pilih Jurusan</label>
                    <select name="" id="" class="form-control">
                        <option value=" ">Pilih Jura</option>
                        @foreach($jurasan as $i => $jrs)
                            
                        @endforeach
                        
                    </select>
                </div>
                <div class="col-sm">
                    <label for="">Pilih Angkatan</label>
                    <select name="" id="" class="form-control">
                        <option value="
                        "></option>
                    </select>
                </div>
                <div class="col"></div>
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
                <th>No</th>
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
                <td>{{$s->no_absen}}</td>
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



<div class="modal fade" tabindex="-1" role="dialog" id="modal-tambah-siswa">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Input Persiswa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Excel</a>
                </li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container py-5">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                        <label for="">Angkatan dan Jurusan</label>
                        <div class="row">
                            
                            <div class="col">
                                <select name="" id="" class="form-control">
                                    <option value="">Angkatan</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <label for="" class="mt-4">Tempat/ Tanggal Lahir</label>
                        <div class="row">
                                <div class="col"><input type="text" class="form-control"></div>
                                <div class="col"> <input type="date" class="form-control"></div>
                       </div>
                       <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control">
                       </div>
                       <label for="">Agama</label>
                       <div class="row p-2">
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Agama</option>
                                <option value="">Islam</option>
                                <option value="">Kristem</option>
                                <option value="">Katholik</option>
                            </select>
                        </div>


                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
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