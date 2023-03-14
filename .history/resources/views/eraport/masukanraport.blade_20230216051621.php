@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card m-2 p-3" style="width:300px">
        <div class="row">
            
        </div>
        <h3>{{$item['kelas_display']}}</h3>
       </div>
   @endforeach
@endforeach
</div>
@endsection