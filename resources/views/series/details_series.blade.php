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
                                <h4>{{ $dataSeries['name'] }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">>
                            <img src="https://image.tmdb.org/t/p/w500/{{ $dataSeries['poster_path'] }}"
                                alt="{{ $dataSeries['name'] }}" style="height:50%">>
                            <div class="section-title" style="padding-top: 2em;">
                                <h4>SYNOPSIS & INFO ({{ $dataSeries['vote_average'] }})</h4>
                                <div style="padding-top: 2em;">
                                    <p style="color: white">
                                        <span style="font-weight : bold; color :#e53637"> Depuis le :
                                        </span>{{ \Carbon\Carbon::parse($dataSeries['first_air_date'])->format('d-m-Y') }}
                                        <br>
                                        <span style="font-weight : bold; color :#e53637">Pays d'origine : </span>
                                        {{ is_array($dataSeries['origin_country']) ? implode(', ', $dataSeries['origin_country']) : $dataSeries['origin_country'] }}
                                        <br>
                                        @foreach ($dataSeries['genres'] as $genre)
                                            {{ $genre['name'] }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                            <!-- Ajoute une virgule sauf pour le dernier élément -->
                                        @endforeach
                                        @foreach ($dataSeries['genres'] as $genre)
                                            {{ $genre['name'] }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                            <!-- Ajoute une virgule sauf pour le dernier élément -->
                                        @endforeach
                                        <br><br>
                                        {{ $dataSeries['overview'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
