@extends('layouts.layout', [
    'class' => '',
    'folderActive' => '',
    'elementActive' => '',
])

@section('content')
    @include('layouts.carousel')
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
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__text">

                                    <ul>
                                        @foreach ($series as $serie)
                                            <img src="https://image.tmdb.org/t/p/w500/{{ $serie['poster_path'] }}"
                                                alt="{{ $serie['name'] }}">
                                            <li>{{ $serie['name'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">

                                <div class="product__item__text">
                                    <ul>

                                        @foreach ($movies as $movie)
                                            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                                alt="{{ $movie['title'] }}">
                                            <li>{{ $movie['original_title'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.topviews')
        </div>
    </section>
@endsection
