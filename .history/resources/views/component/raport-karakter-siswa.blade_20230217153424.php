
    <h3>Tes</h3>
    <div class="containe">

    </div>
    <div id="accordion">
        @foreach($listPenilaian as $key => $value)
        <div class="card">
            <div class="card-header" >
                <p data-toggle="collapse" href="#description1">Penilaian Tanggal {{$value->tanggal_penilaian}}</p>
            </div>
            <div id="description1"
                class="collapse show"
                data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                       @fo
                      </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
