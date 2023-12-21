<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="product__sidebar" style="background-color: #171717">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Top Movies</h5>
            </div>
            @foreach ($dataMovies->take(4) as $movie)
                <div class="filter__gallery">
                    <div class="filter__gallery">
                        <div class="product__sidebar__view__item set-bg mix day years">

                            <a href="{{ route('movies.details_movies', ['id' => $movie['id']]) }}" class="btn">
                                <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                    alt="{{ $movie['original_title'] }}">
                                <h5 style="color: white">{{ $movie['original_title'] }}</h5>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
