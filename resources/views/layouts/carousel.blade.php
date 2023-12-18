<!-----------carousel----------------->
<section class="hero">
    <h1>Nouveautés</h1>

    <h2>Nouvelles Séries</h2>
    <div id="carouselNewSeries" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($newSeries->take(8) as $index => $serie)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $serie['poster_path'] }}" class="d-block w-100" alt="{{ $serie['name'] }}">
                    <div class="carousel-caption d-none d-md-block">
                        <p>{{ $serie['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselNewSeries" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselNewSeries" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2>Nouveaux Films</h2>
    <div id="carouselNewMovies" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($newMovies->take(8) as $index => $movie)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="d-block w-100" alt="{{ $movie['title'] }}">
                    <div class="carousel-caption d-none d-md-block">
                        <p>{{ $movie['title'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselNewMovies" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselNewMovies" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!---------------fin carousel------------------------>
