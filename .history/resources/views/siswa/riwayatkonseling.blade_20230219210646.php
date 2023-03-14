@extends('adminlte::page')

@section('content')


<div class="card p-3 mt-2">
<h4 class="mb-3">Riwayat Konseling Saya</h4>
<div class="container">
    @foreach($konsel as $i => $kns)
    <div class="card p-3 m-0 m-1    ">
        <div class="row">
            <div class="col">
                <h>{{$kns->keterangan}}</h>
                <p><b>Konselor</b>  {{$kns->konselor->name}}</p>
                <span>{{$kns->tanggal}}</span>
                <span>{{$kns->status}}</span>
            </div>
           
        </div>
    </div>
    @endforeach
   
   
</div>

</div>
@endsection