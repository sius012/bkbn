@foreach($listPenilaian as $key => $value)
    <h3>Tes</h3>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link"
                    data-toggle="collapse"
                    href="#description1">
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
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link"
                    data-toggle="collapse"
                    href="#description2">
                    Bootstrap
                </a>
            </div>
            <div id="description2" class="collapse"
                data-parent="#accordion">
                <div class="card-body">
                    Bootstrap is free and open-source
                    collection of tools for creating
                    websites and web applications.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link"
                    data-toggle="collapse"
                    href="#description3">
                    HTML
                </a>
            </div>
            <div id="description3" class="collapse"
                data-parent="#accordion">
                <div class="card-body">
                    HTML stands for HyperText Markup
                    Language. It is used to design
                    web pages using markup language.
                </div>
            </div>
        </div>
    </div>
@endforeach