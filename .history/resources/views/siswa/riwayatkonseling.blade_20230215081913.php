@extends('adminlte::page')

@section('content')
<div class="container">
    @foreach($konsel as $i => $kns)
    <div class="card p-3 m-0 m-1    ">
        <div class="row">
            <div class="col">
                <p>{{$kns->keterangan}}</p>
            </div>
        </div>
    </div>
    @endforeach
   
   
</div>
@endsection