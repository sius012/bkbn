@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card m-2" style="width:400px">
        <h3>{{$item['kelas_display']}}</h3>
       </div>
   @endforeach
@endforeach
</div>
@endsection