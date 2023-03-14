@extends('adminlte::page')

@section("content")
    <form action="{{url('importexcel')}}">
        @csrf
        <input type="file" name="file">
        <input type="button">
    </form>

@endsection
