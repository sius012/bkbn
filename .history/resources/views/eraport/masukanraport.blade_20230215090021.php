@extends('adminlte::page')

@section('content')
<form action="{{url('masukan-raport')}}" type="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" class="form-control">
    </div>
    <input type="submit" class="">
</form>
@endsection