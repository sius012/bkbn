@extends('adminlte::page')

@section("content")
    <form action="{{url('')}}">
        @csrf
        <input type="file">
    </form>

@endsection