@extends('adminlte::page')

@section("content")

    <div class="table table-striped">
        <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Penilaian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penilaian as $i => $p)
                
            @endforeach
          
        </tbody>
    </table>
    </div>
    

@endsection