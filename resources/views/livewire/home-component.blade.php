<div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="tm-content-box">
                <h1>Recents polls</h1>   
            </div>
        </div>
    </div> <!-- row -->
    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                @foreach ($npolls as $npoll)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-content-box">
                            <img src="{{asset('images/polls')}}/{{$npoll->image}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$npoll->title}}</h4>
                            <p class="tm-margin-b-18 tm-gold-text">{{$npoll->poll_description}}</p>
                            <p class="tm-margin-b-18">Data de inicio: {{$npoll->start_date}}</p>
                            <p class="tm-margin-b-18">Data de termino: {{$npoll->end_date}}</p>
                            <a href="#" class="tm-btn">Opcao A: 1000 votos</a>   
                        </div>
                    </div>
                @endforeach
            </div> <!-- row -->
        </div>
    </section>
</div>
