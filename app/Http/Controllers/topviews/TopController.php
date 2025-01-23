<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class TopController extends Controller
{
    /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

    public function show()
    {

        $token = config('services.tmdb.api_key');
        $topSeries = 'https://api.themoviedb.org/3/tv/popular?language=fr-FR&page=1'; // Endpoint pour les séries populaires
        $topMovies = 'https://api.themoviedb.org/3/movie/popular?language=fr-FR&page=1'; // Endpoint pour les films populaires

        // Series.

        $client = new Client();{
            $responseSeries = $client->get($topSeries, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Films.

            $responseMovies = $client->get($topMovies, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Maintenant, on stocke les données des séries et des films.

            $dataSeries = Collection::make(json_decode($responseSeries->getBody(), true)['results']);
            $dataMovies = Collection::make(json_decode($responseMovies->getBody(), true)['results']);

            view('layouts.topviws', ['newSeries' => $dataSeries, 'newMovies' => $dataMovies]);

        }

    }

}
