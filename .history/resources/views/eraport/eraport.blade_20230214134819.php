@extends('adminlte::page')

@section("content")
    <form action="{{route}}">
        @csrf
        <input type="file">
    </form>

@endsection