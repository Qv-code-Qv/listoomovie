<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="product__sidebar" style="background-color: #171717">
        <div class="product__sidebar__view">
            <div class="section-title">
                <h5>Top Views</h5>
            </div>
            <ul class="filter__controls">
                <li class="active" data-filter="*">Day</li>
                <li data-filter=".week">Week</li>
                <li data-filter=".month">Month</li>
                <li data-filter=".years">Years</li>
            </ul>
            @foreach ($dataMovies->take(4) as $movie)
                <div class="filter__gallery">
                    <div class="product__sidebar__view__item set-bg mix day years" data-setbg="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}">

                        <h5><a href="#">{{ $movie['original_title'] }}</a></h5>
                    </div>
            @endforeach




        </div>
    </div>

</div>
</div>
