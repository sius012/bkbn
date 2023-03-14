@extends('adminlte::page')


@section("content")
<table class="table table-striped table-light">
    <thead>
        <tr>
            <th></th>
            <th>Keterangan</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajuanmasuk as $i => $pm)
            <tr>
                <td></td>
                <td>{{$pm->keterangan}}</td>
                <td>{{$pm->tanggal}}</td>
                <td>{{$pm->tanggal}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection