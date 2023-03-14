@extends('adminlte::page')

@section('content')
<div class="container">
  
        <div class="card">
            <div class="card-body">
                <div class="row"><div class="col-sm">
                    <label for=""></label>
                </div>
                <div class="col-sm">
                    <label for="">Pilih Angkatan</label>
                    <select name="" id="" class="form-control">
                        <option value="
                        "></option>
                    </select>
                </div>
                </div>
            </div>
        </div>
    
</div>
<table class="table table-report m-3">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <td>{{$s->nis}}</td>
            <td>{{$s->nama_siswa}}</td>
            <td>{{$s->kelasdanjurusan()}}</td>
            <td>{{$s->jenis_kelamin}}</td>
            <td>
                <div class="row">
                    <div class="col">
                       <a href="{{url('/detailsiswa/'.$s->nis)}}"> <button class="btn btn-info"><i class="fas fs-1 fa-info"></i></button></a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
<script>
    $(document).ready(function(){
        alert("tes");
    })
</script>



@endsection