<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

    public function index()
    {

        $token = env('TMDB_API_KEY');
        $urlSeries = 'https://api.themoviedb.org/3/discover/tv?include_adult=false&include_null_first_air_dates=false&language=fr-FR&page=1&sort_by=primary_release_date.desc';
        $urlMovies = 'https://api.themoviedb.org/3/discover/movie?include_adult=false&include_null_first_air_dates=false&language=fr-FR&page=1&sort_by=primary_release_date.desc';

        // Series.

        $client = new Client(); {
            $responseSeries = $client->get($urlSeries, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Films.

            $responseMovies = $client->get($urlMovies, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Maintenant, on stocke les données des séries et des films.

            $dataSeries = Collection::make(json_decode($responseSeries->getBody(), true)['results']);
            $dataMovies = Collection::make(json_decode($responseMovies->getBody(), true)['results']);


            return view('home', ['series' => $dataSeries, 'movies' => $dataMovies]);
        }
    }
}
