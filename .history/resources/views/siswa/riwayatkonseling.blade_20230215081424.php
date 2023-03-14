@extends('adminlte::page')

@section('content')
<div class="containers">
    @foreach($konsel as $i => $kns)
    <div class="card">
        <div class="row">
            <div class="col">
                <h3>Tes</h3>
            </div>
        </div>
    </div>
    @endforeach
   
   
</div>
@endsection