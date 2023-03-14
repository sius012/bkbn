@extends('adminlte::page')

@section("content")
<div class="card p-3">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h4>{{$siswa->nama_siswa}}</h4>
            <h6 class="text-secondary">{{$siswa->kelasdanjurusan()}}</h6>
        </div>
    </div>
</div>

@endsection