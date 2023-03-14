
    <h3>Tes</h3>
    <div class="containe">

    </div>
    <div id="accordion">
        @foreach($listPenilaian as $key => $rp)
        <div class="card">
            <div class="card-header"  data-toggle="collapse" href="#description1" >
                <p>Penilaian Tanggal {{$rp->tanggal_penilaian}}</p>
            </div>
            <div id="description1"
                class="collapse show"
                data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                       @foreach($rp->detail_pg[0]->aspek_dpg as $j => $rpa)
                       <li class="list-group-item p-0 font-size-">{{$rpa->aspek4B->keterangan}}</li>
                       @endforeach
                      </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
