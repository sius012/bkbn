@foreach($listPenilaian as $key => $value)
    <h3>Tes</h3>
    <div id="accordion">
        <div class="card">
            <div class="card-header" data-toggle="collapse" href="#description1">
                <a class="card-link"
                    
                    >
                    GeeksforGeeks
                </a>
            </div>
            <div id="description1"
                class="collapse show"
                data-parent="#accordion">
                <div class="card-body">
                    GeeksforGeeks is a computer
                    science portal. It is the best
                    platform to lean programming.
                </div>
            </div>
        </div>
     
    </div>
@endforeach