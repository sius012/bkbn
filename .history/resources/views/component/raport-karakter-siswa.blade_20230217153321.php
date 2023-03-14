
    <h3>Tes</h3>
    <div id="accordion">
        @foreach($listPenilaian as $key => $value)
        <div class="card">
            <div class="card-header" >
                <p>Penilaian Tanggal {{$value->tanggal_penilaian}}</p>
            </div>
            <div id="description1"
                class="collapse show"
                data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
