@extends('adminlte::page')


@section("content")
<div class="container-fluid"> 


</div>
  


@section('adminlte_js')
  <script>
    $(document).ready(function(){
        $(".show-modal-catatan").click(function(){
            alert("tes");
            $("#idtanggapan-field").val($(this).val());
        });
    });
  </script>
  @endsection
@endsection