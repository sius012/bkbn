@extends('adminlte::page')

@section('content')
@foreach($kelas as $k => $kls)
    <div class="card">
        <h3>{{$kls["kelas_display"]}}</h3>
    </div>
@endforeach
@endsection