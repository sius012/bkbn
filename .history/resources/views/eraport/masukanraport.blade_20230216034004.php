@extends('adminlte::page')

@section('content')
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card">
        <h3>{{$kls->kelas}}</h3>
       </div>
   @endforeach
@endforeach
@endsection