@extends('adminlte::page')

@section("content")
<button class="btn btn-primary-bb" data-toggle="modal" data-target="#tambah-user-modal">Tambah</button>
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

    @include("component.tambah_user_modal")
@endsection