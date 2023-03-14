@extends('adminlte::page')


@section("content")
<div class="container">
    <div class="row">
        <div class="col p-3">
            <h3>RPL</h3>
            <table class="table table-light table-striped" style="o">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Daftar Siswa</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $i => $siswas)
                        <tr>
                            <td>{{$siswas->no_absen}}</td>
                            <td>{{$siswas->nama_siswa}}</td>
                            <td><button class=""><i></i></button></td>
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