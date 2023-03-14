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
        @foreach($listsiswa as $i => $siswa)
            
        @endforeach
    </tbody>
</table>
@endsection