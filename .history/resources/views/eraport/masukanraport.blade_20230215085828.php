@extends('adminlte::page')

@section('content')
<form action="{{url('masukan-raport')}}" type="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-">
    </div>
</form>
@endsection