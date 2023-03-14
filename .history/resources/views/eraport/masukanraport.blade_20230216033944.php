@extends('adminlte::page')

@section('content')
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       
   @endforeach
@endforeach
@endsection