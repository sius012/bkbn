@extends('adminlte::page')


@section("content")
<table class="table table-striped table-light">
    <thead>
        <tr>
            <th></th>
            <th>Keterangan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajuanmasuk as $i => $pm)
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
       
    </tbody>
</table>
@endsection