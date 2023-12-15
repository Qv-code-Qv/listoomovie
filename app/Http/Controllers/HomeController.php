<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

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
        $urlSeries = 'https://api.themoviedb.org/3/tv/popular?language=fr-FR';
        $urlMovies = 'https://api.themoviedb.org/3/movie/popular?language=fr-FR';

        // Series populaire.

        $client = new Client(); {
            $responseSeries = $client->get($urlSeries, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Films populaire.

            $responseMovies = $client->get($urlMovies, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Maintenant, on stocke les données des séries et des films populaires.

            $dataSeries = json_decode($responseSeries->getBody(), true)['results'];
            $dataMovies = json_decode($responseMovies->getBody(), true)['results'];


            return view('home', ['series' => $dataSeries, 'movies' => $dataMovies]);
        }
    }
}
