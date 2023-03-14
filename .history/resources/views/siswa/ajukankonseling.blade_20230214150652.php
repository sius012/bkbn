@extends('adminlte::page')
@php
    
@endphp
@section('content')
<div class="container">
    <div class="row">

        @for($i = 0;$i < 100;$i++)
        
            <div class="card m-2" style="width:300px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img style="width: 50px" class="rounded-circle shadow" src="https://images.iphonephotographyschool.com/24755/1120/portrait-photography.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <p class="font-weight-bold line-height-9">Dionisius</p>
                            <p>Konselor</p>
                        </div>
                    </div>
                </div>
            
        </div>
        @endfor

</div>  
</div>


@endsection