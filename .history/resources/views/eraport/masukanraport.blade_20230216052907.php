@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card m-2 p-3" style="width:300px">
        <div class="row">
            <div class="col">
                <h3>{{$item['kelas_display']}}</h3>
                <span>Angkatan {{$is["angkatan"]}}</span>
            </div>
        </div>
       <div class="row">
        <div class="col"><button class="btn btn-primary-bb">Input Raport</button></div>
        <div class="col"><cbutton class="btn btn-primary-bb shadow">E-Raport</cbutton></div>
       </div>
       </div>
   @endforeach
@endforeach
</div>
@endsection