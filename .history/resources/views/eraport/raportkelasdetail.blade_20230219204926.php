@extends('adminlte::page')

@section("content")


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
                    <button></button>
                </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
    
    

@endsection