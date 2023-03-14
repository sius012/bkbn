@extends('adminlte::page')


@section("content")
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table" style="o">
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
        </div>
        <div class="col card">
            
        </div>
    </div>
</div>

@endsection