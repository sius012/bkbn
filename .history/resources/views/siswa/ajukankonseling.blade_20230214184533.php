@extends('adminlte::page')
@php
    
@endphp
@section('content')
<div class="container">
    <input class="form-control">
    <div class="row">

        @foreach($admin as $i => $adm)
            <div class="card m-2" style="width:300px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img style="width: 50px" class="rounded-circle shadow" src="https://images.iphonephotographyschool.com/24755/1120/portrait-photography.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <p class="font-weight-bold line-height-1">{{$adm->name}}</p>
                            <span>Konselor</span>
                        </div>
                        <button class="btn btn-primary-bb btn-sm">Ajukan Konseling</button>
                    </div>
                </div>
            
        </div>
        @endforeach

</div>  
</div>


@endsection