@extends('adminlte::page')

@section('content')
<div class="containers">
    @foreach($konsel as $i => $kns)
    <div class="card">
        <div class="row">
            <div class="col">
                p{{$kns->keterangan}}</p>
            </div>
        </div>
    </div>
    @endforeach
   
   
</div>
@endsection