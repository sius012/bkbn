@extends('adminlte::page')

@section("content")
<div class="card p-3  ">
    <div class="row" style="height: 100vh">
        <div class="col-5"></div>
        <div class="col-7">
            <h4>{{$siswa->nama_siswa}}</h4>
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
            <div class="container">
                
            </div>
        </div>
    </div>
</div>

@endsection