@extends('adminlte::page')

@section('content')
<form action="{{url('importexcel')}}" type="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control">
    </div>
    <button type="submit" class="Primary"><h3>tes</h3></button>
</form>
@endsection