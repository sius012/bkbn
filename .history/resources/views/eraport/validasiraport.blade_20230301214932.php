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
        @foreach($table as $i => $tb)
            <tr>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection