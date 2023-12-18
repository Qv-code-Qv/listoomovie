<?php

namespace App\Http\Controllers\Carousel;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;


use Illuminate\Http\Request;

class CarouselController extends Controller
{
        /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

     public function show(Request $request){

        $token = env('TMDB_API_KEY');
        $newSeries = 'https://api.themoviedb.org/3/tv/on_the_air'; // Endpoint pour les nouvelles séries
        $newMovies = 'https://api.themoviedb.org/3/movie/now_playing'; // Endpoint pour les nouveaux films

        // Series.

        $client = new Client(); {
            $responseSeries = $client->get($newSeries, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Films.

            $responseMovies = $client->get($newMovies, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Maintenant, on stocke les données des séries et des films.

            $dataSeries = Collection::make(json_decode($responseSeries->getBody(), true)['results']);
            $dataMovies = Collection::make(json_decode($responseMovies->getBody(), true)['results']);


             view('home', ['newSeries' => $dataSeries, 'newMovies' => $dataMovies]);

        }



     }

}
