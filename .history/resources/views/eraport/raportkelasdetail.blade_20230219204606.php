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
            @foreach($variable as $key => $value)
                
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>
    

@endsection