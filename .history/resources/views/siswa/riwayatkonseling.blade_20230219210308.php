@extends('adminlte::page')

@section('content')


<div class="card p-3">
<h4 class="mb-3">Riwayat Konseling Saya</h4>
<div class="container">
    @foreach($konsel as $i => $kns)
    <div class="card p-3 m-0 m-1    ">
        <div class="row">
            <div class="col">
                <p>{{$kns->keterangan}}</p>
                <p><b>Konselor</b>  {{$kns->konselor->name}}</p>
            </div>
            <div class="col">
                <span>{{$kns->tanggal}}</span>
            </div>
        </div>
    </div>
    @endforeach
   
   
</div>

</div>
@endsection