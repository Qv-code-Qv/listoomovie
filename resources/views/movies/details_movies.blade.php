@extends('layouts.layout', [
    'class' => '',
    'folderActive' => '',
    'elementActive' => '',
])

@section('content')
    <section class="product spad">
        <div class="row">
            <div class="col-lg-24">
                <div class="trending__product" style="background-color: #171717">
                    <!-----------------------DETAILS ----------->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>{{ $movie['original_title'] }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">>
                            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                alt="{{ $movie['original_title'] }}" style="height:50%">>
                            <div class="section-title" style="padding-top: 2em;">
                                <h4>resume ({{ $movie['vote_average'] }})</h4>
                                <div style="padding-top: 2em;">
                                    <p style="color: white">{{ $movie['overview'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
