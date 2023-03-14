@extends('adminlte::page')


@section("content")
<table class="table" style="">
    <thead>
        <tr>
            <th>NO</th>
            <th>Daftar Siswa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $i => $siswas)
            <tr>
                <td>{{$siswas->no_absen}}</td>
                <td>{{$siswas->nama_siswa}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection