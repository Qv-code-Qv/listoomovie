<!-----------carousel----------------->

<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach ($dataSeries->take(4) as $serie)
            <div class="hero__items set-bg" data-setbg="https://image.tmdb.org/t/p/w500/{{ $serie['poster_path'] }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <h2>{{ $serie['name'] }}</h2>
                            <a href="{{ route('series.details_series', ['id' => $serie['id']]) }}"><span>Details</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!---------------fin carousel------------------------>
