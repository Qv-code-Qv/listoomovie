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
                    <!-----------------------MOVIES ----------->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>MOVIES</h4>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($movies as $movie)
                            <div class="col-md-3">
                                <a href="{{ route('movies.details_movies', ['id' => $movie['id']]) }}" class="btn">
                                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                        alt="{{ $movie['original_title'] }}">
                                    <p style="color: white">{{ $movie['original_title'] }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center" style="gap: 10px;">
                        {{-- Boutons suivants et précédents --}}
                        @if ($page > 1)
                            <a href="{{ route('movies.movies', ['page' => $page - 1]) }}" class="btn btn-primary"><span
                                    class="arrow_left"></span></a>
                        @endif


                        @if (isset($totalPages) && $page < $totalPages)
                            <a href="{{ route('movies.movies', ['page' => $page + 1]) }}" class="btn btn-primary"><span
                                    class="arrow_right"></span></a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
