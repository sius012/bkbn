@extends('adminlte::page')

@section("content")
    <form action="{{url('pos')}}">
        @csrf
        <input type="file">
    </form>

@endsection