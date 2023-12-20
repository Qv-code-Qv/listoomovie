@extends('layouts.layout', [
    'class' => '',
    'folderActive' => '',
    'elementActive' => '',
])

@section('content')
    <!-----------------------CAROUSEL----------->
    @include('layouts.carousel')
    <!---------------------------------->
    <section class="product spad">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product" style="background-color: #171717">
                    <!-----------------------SERIES POPULAIRES----------->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>SERIES</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('series.series.show') }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($series->take(12) as $serie)
                            <div class="col-md-3">
                                <img src="https://image.tmdb.org/t/p/w500/{{ $serie['poster_path'] }}"
                                    alt="{{ $serie['name'] }}">
                                <p style="color: white">{{ $serie['name'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <!-----------------------FILMS POPULAIRES----------->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>MOVIES</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="{{ route('movies.movies.show') }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($movies->take(12) as $movie)
                            <div class="col-md-3">
                                <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                    alt="{{ $movie['title'] }}">
                                <p style="color: white">{{ $movie['original_title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('layouts.topviews')
        </div>
    </section>
@endsection
