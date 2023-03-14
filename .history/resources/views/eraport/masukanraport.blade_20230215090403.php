@extends('adminlte::page')

@section('content')
<form action="{{url('importexcel')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control" name="file">
    </div>
    <button type="submit" class="btn btn-primary-bb">Upload</button>
</form>
@endsection