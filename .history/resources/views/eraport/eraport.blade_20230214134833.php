@extends('adminlte::page')

@section("content")
    <form action="{{url('importlaravel')}}">
        @csrf
        <input type="file">
    </form>

@endsection