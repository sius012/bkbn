@extends('adminlte::page')


@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm p-3">
            <h3>RPL</h3>
            <table class="table table-light table-striped" style="o">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Daftar Siswa</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $i => $siswas)
                        <tr>
                            <td>{{$siswas->no_absen}}</td>
                            <td>{{$siswas->nama_siswa}}</td>
                            <td><button class="btn btn-primary btn-info-raport" value="{{$siswas->nis}}"><i class="fa fa-list"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm card container-detail">
            
        </div>
    </div>
</div>



@endsection

@section("adminlte_js")
<script>
    $(document).ready(function(){
        $(".btn-info-raport").click(function(){
            detailRaportSiswa($(this).val());
        });

        $(document).delegate(".back-raport","click",function(){
            alert("tes");
        });
    });


    function detailRaportSiswa(nis){
        $.get("{{url('/detailraport')}}"+"/"+nis,{}, function(data, status){
            $(".container-detail").html(data);
        });
    }

</script>
@endsection