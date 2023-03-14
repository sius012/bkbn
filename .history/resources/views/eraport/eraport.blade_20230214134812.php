@extends('adminlte::page')

@section("content")
    <form action="">
        @csrf
        <input type="file">
    </form>

@endsection