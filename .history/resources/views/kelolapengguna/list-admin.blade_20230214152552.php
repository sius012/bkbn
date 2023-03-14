@extends('adminlte::page')

@section("content")
<button class="btn btn-primary">Tambah</button>
    <table>
        <thead>
            <tr>
                <td>Nama</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dionisius</td>
            </tr>
        </tbody>
    </table>

    @include("component.tambah-user-modal")
@endsection