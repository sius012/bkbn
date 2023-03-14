@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card" style="width:200px">
        <h3>{{$item['kelas_display']}}</h3>
       </div>
   @endforeach
@endforeach
</div>
@endsection