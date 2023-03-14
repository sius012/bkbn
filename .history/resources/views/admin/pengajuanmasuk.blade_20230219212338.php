@extends('adminlte::page')


@section("content")
<table class="table table-striped table-light">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajuanmasuk as $i => $pm)
            <tr>
                <td></td>
                <td>{{</td>
                <td>{{$pm->keterangan}}</td>
                <td>{{$pm->tanggal}}</td>
                <td>{{$pm->status}}</td>
                <td>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-times p-0"></i></button>
                    <button class="btn btn-success btn-sm"><i class="fa fa-times p-0"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection