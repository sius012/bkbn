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
                    <div class="col">NIS</div>
                    <div class="col">NIS</div>
                </div>
            </div>
            <div class="container">
                
            </div>
        </div>
    </div>
</div>

@endsection