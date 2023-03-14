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
        @foreach($listsiswa as $key => $value)
            
        @endforeach
    </tbody>
</table>
@endsection