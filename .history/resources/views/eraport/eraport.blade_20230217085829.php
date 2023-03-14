@extends('adminlte::page')

@section("content")
    <form action="{{url('importexcel')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit" name="file">
    </form>

@endsection
