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
                                <h4>{{ $serie['name'] }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $serie['poster_path'] }}"
                                alt="{{ $serie['name'] }}">
                            <p style="color: white">{{ $serie['overview'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
