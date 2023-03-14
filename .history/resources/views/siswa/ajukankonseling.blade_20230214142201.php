@extends('adminlte::page')
@php
    
@endphp
@endphp
@section('content')
<div class="container">
    <div class="row">
        @for($i = 0;$i < 100;$i++)
        <div class="col-4 p-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="" alt="">
                        </div>
                        <div class="col-8"></div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection