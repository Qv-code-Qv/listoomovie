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
                                <h4>SERIES</h4>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                       {{--  @foreach ($movies as $movie)
                            <div class="col-md-3">
                                <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                    alt="{{ $movie['original_title'] }}">
                                <p style="color: white">{{ $movie['original_title'] }}</p>
                            </div>
                        @endforeach --}}
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
