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
                            <span class="font-weight-bold line-height-1">{{$adm->name}}</span><br>
                            <span>Konselor</span>
                        </div>
                    </div>
                    <div class="container mt-3">
                        <button class="btn btn-primary-bb btn-sm btn-konsel " data-toggle="modal" data-target="#modal-konseling" value="{{$adm->id}}">Ajukan Konseling</button>
                    </div>
                </div>
            
        </div>
        @endforeach

</div>  

</div>

@section('adminlte_js')
<script>
    $(document).ready(function(){
        $(".btn-konsel").click(function(){
            var selectedval = $(this).val();
            $(".konselor-select").children("option").each(function(){
                if(this.val() == $selectedval){}
            });
        });
       
    })
</script>
@endsection

@include("component.ajukan_konseling")
@endsection