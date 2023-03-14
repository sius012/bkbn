@extends('adminlte::page')

@section("content")
<div class="card p-3  ">
    <div class="row">
        <div class="col-5">
            <img src="https://images.unsplash.com/photo-1603775020644-eb8decd79994?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cG9ydHJhaXQlMjBwaG90b2dyYXBoeXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="..." class="img-thumbnail">

        </div>
        <div class="col-7">
            <h4 class="font-bold">{{$siswa->nama_siswa}}</h4>
            <h6 class="text-secondary">{{$siswa->jurusan->keterangan    }}</h6>
            <div class="container">
                <div class="row">
                    <div class="col-4">NIS</div>
                    <div class="col-8">{{$siswa->nis}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Tempat/Tanggal Lahir</div>
                    <div class="col-8">{{$siswa->tempat_lahir}},{{$siswa->tanggal_lahir}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Alamat</div>
                    <div class="col-8">{{$siswa->tempat_lahir}},{{$siswa->alamat}}</div>
                </div>
                <div class="row">
                    <div class="col-4">Jenis Kelamin</div>
                    <div class="col-8">{{$siswa->jenis_kelamin}}</div>
                </div>
            </div>
            <div class="container p-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil Lengkap</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Riwayat Konseling</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Riwayat Kasus</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent" style="overflow-y: scroll; height: 80vh">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <button class="btn btn-primary-bb my-2" id="edit-data-siswa"><i class="fa fa-edit"></i> Ubah</button>
                        <form action="{{url('/lengkapidatasiswa/'.$siswa->nis)}}" method="post">
                            @csrf
                        <table class="table table-striped border">
                                @foreach($kolomdetail as $key => $kd)
                                    <tr>
                                        <th><b>{{$kd["display"]}}</b></th>
                                        <th class="input-data-field"><input type="{{$kd["type"]}}" value="{{$kd['value']}}"  required @if($siswa->detail == null)   placeholder='Belum Dilengkapi' @else readonly @endif name='{{$kd["real"]}}' class="form-control"></th>
                                    </tr>
                                @endforeach
                        </table>
                        <button class="btn btn-primary-bb" type="submit">@if($siswa->detail == null)Lengkapi @else Perbarui @endif</button>
                    </form>
                       
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h4 class="my-2">Riwayat Konseling {{$siswa->nama_siswa}}</h4>
                        <ul class="list-group my-4">
                            @foreach($datakonsel as $j => $dk)
                            <li class="list-group-item"><p></p></li>
                            @endforeach

                            
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section("adminlte_js")
    <script>
        $(document).ready(function(){
            $("#edit-data-siswa").click(function(){
                $(".input-data-field").each(function(){
                    let input = $(this).children("input");
                    if(input.attr("readonly") != undefined){
                        input.removeAttr("readonly");
                    }else{
                        input.attr("readonly","readonly");
                    }
                });
            }); 
        });
    </script>
@endsection