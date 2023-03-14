@extends('adminlte::page')


@section("content")
<table>
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
                <td>{{}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection