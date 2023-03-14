@extends('adminlte::page')

@section("content")
<h3>Penilaian Guru</h3>
<div class="container">
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Penilaian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penilaian as $i => $p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->tanggal_penilaian}}</td>
                <td>
                    <a href=""><button class="btn btn-success"><i class="fa fa-file"></i></button></a>
                    <a href={{url('/daftar-raport-siswa/'.$item['angkatan']."/".$item['jurusan'])}}><button class="btn btn-primary"><i class="fa fa-users"></i></button></a>
                </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
    
</div>
        
    

@endsection