@extends('adminlte::page')

@section("content")
    <form action="{{url('importexcel')}}">
        @csrf
        <input type="file">
    </form>

@endsection