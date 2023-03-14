@extends('adminlte::page')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Syarat</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        @foreach($table as $row => $tb)
            <tr>
                <td>{{$row}}</td>
                <td><i class="fa fa-circle-che"></i></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection