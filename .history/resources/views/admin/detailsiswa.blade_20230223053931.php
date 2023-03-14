@extends('adminlte::page')

@section("content")
<div class="card p-3  ">
    <div class="row">
        <div class="col-5">
            <img src="https://images.unsplash.com/photo-1603775020644-eb8decd79994?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cG9ydHJhaXQlMjBwaG90b2dyYXBoeXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="..." class="img-thumbnail">

        </div>
        <div class="col-7">
            <h4 class="font-bold">{{$siswa->nama_siswa}}</h4>
            <h6 class="text-secondary">{{$siswa->jurusan->keterangan    }}</h6>
            <div class="container">
                <div class="row">
                    <div class="col-4">NIS</div>
                    <div class="col-8">{{$siswa->nis}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Tempat/Tanggal Lahir</div>
                    <div class="col-8">{{$siswa->tempat_lahir}},{{$siswa->tanggal_lahir}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Alamat</div>
                    <div class="col-8">{{$siswa->tempat_lahir}},{{$siswa->alamat}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Jenis Kelamin</div>
                    <div class="col-8">{{$siswa->jenis_kelamin}}</div>
                </div>
            </div>
            <div class="container p-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil Lengkap</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Riwayat Konseling</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Riwayat Kasus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent" style="overflow-y: scroll; height: 80vh">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <button class="btn btn-primary-bb"><i class="fa fa-edit"></i></button>
                        <table class="table table-striped">
                                @foreach($kolomdetail as $key => $kd)
                                    <tr>
                                        <th><b>{{$kd}}</b></th>
                                        <th>{{$siswa->detail == null ? "belum dilengkapi" : "sudah ada"}}</th>
                                    </tr>
                                @endforeach
                        </table>
                       
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection