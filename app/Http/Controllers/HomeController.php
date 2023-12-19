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
        $urlSeries = 'https://api.themoviedb.org/3/tv/popular?language=fr-FR&page=1';
        $urlMovies = 'https://api.themoviedb.org/3/movie/popular?language=fr-FR&page=1';

        // Series.

        $client = new Client();{
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

            $content = [$dataMovies, $dataSeries];

            // Triez le contenu par date de sortie décroissante
            // Triez le contenu par date de sortie décroissante
            usort($content, function ($a, $b) {
                $dateA = $a['release_date'] ?? $a['first_air_date'] ?? null;
                $dateB = $b['release_date'] ?? $b['first_air_date'] ?? null;

                if ($dateA === null && $dateB === null) {
                    return 0;
                }

                if ($dateA === null) {
                    return 1;
                }

                if ($dateB === null) {
                    return -1;
                }

                return strtotime($dateB) - strtotime($dateA);
            });

            // on retourne les données avec les données du carousel.

            return view('home', ['series' => $dataSeries, 'movies' => $dataMovies,
                'dataSeries' => $dataSeries, 'dataMovies' => $dataMovies,
            ]);
        }
    }
}
