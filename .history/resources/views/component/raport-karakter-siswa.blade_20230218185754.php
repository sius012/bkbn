
   
    <div class="container p-1">
     
        <a href="#" class="back-raport mb-2">Kembali</a>
        <h6>Penilaian Raport Karakter</h6>
        <h3 class="m-0">{{$siswa->nama_siswa}}</h3>
        <h6>Oleh: {{$listPenilaian[0]->penilai->name}}</h6>

        <a href="{{url("")}}"><button class="btn btn-success m-2"><i class="fa fa-download"></i></button></a>
    <div id="accordion">
        @foreach($listPenilaian as $key => $rp)
        <div class="card">
            <div class="card-header"  data-toggle="collapse" href="#description{{$key}}" >
                <p stye="">Penilaian Tanggal {{$rp->tanggal_penilaian}}</p>
            </div>
            <div id="description{{$key}}"
                class="collapse"
                data-parent="#accordion">
                <div class="card-body">
                    <p><b>keterangan:</b> {{$rp->detail_pg[0]->keterangan}}</p>
                    <ul class="list-group">
                       @foreach($rp->detail_pg[0]->aspek_dpg as $j => $rpa)
                       <li class="list-group-item p-2 font-size-"><span>{{$rpa->aspek4B->keterangan}}</span><br><span class="badge badge-success">{{$rpa->nilai}}</span></li>
                       @endforeach
                      </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
