@extends('adminlte::page')

@section('content')
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card"></div>
   @endforeach
@endforeach
@endsection