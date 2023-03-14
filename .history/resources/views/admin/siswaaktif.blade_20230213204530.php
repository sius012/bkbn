@extends('adminlte::page')

@section('content')
<table class="table table-report">
    <thead>
        <tr>
            <th>NIk</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <td>{{}}</td>
            <td>Dionisius</td>
        </tr>
        @endforeach
       
    </tbody>
</table>

@endsection