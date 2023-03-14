@extends('adminlte::page')
@php
    
@endphp
@endphp
@section('content')
<div class="container">
    <div class="row">
        @for($i = 0;$i < 100;$i++)
        <div class="col-4 p-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img style="width: 50px" class="rounded-circle shadow" src="https://images.iphonephotographyschool.com/24755/1120/portrait-photography.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <p class="f-bold"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection