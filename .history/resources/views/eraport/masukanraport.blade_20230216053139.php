@extends('adminlte::page')

@section('content')
<div class="row">
@foreach($kelas as $k => $kls)
   @foreach ($kls as $item)
       <div class="card m-2 p-3" style="width:300px">
        <div class="row">
            <div class="col">
                <h3 class="m-0">{{$item['kelas_display']}}</h3>
                <span class="badge">Angkatan {{$item  ["angkatan"]}}</span>
            </div>
        </div>
       <div class="row mt-1">
        <div class="col"><button class="btn btn-primary-bb btn-sm">Input Raport</button>
            <button class="btn btn-primary-bb shadow btn-sm">E-Raport</button>
        </div>

       </div>
       </div>
   @endforeach
@endforeach
</div>
@endsection