
    <h3>Tes</h3>
    <div class="containe">

    </div>
    <div id="accordion">
        @foreach($listPenilaian as $key => $rp)
        <div class="card">
            <div class="card-header" >
                <p data-toggle="collapse" href="#description1">Penilaian Tanggal {{$rp->tanggal_penilaian}}</p>
            </div>
            <div id="description1"
                class="collapse show"
                data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                       @foreach($rp->detail_pg->aspek_dpg as $j => $rpa)
                        <h3>{{$rpa}}</h3>
                       @endforeach
                      </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
