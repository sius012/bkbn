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
                <td>
                    @if($tb==true)
                    <i class="fas fa-check-circle text-success"></i>
                    @else
                    <i class="fas fa-cr-circle text-danger"></i>
                    @endif
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection