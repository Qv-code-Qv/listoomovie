<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SeriesController extends Controller
{
    /**
     * Page d'acceuil du site
     *
     * @use /
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws Exception
     */

    public function show(Request $request)
    {
        // Récupérer le numéro de la page actuelle à partir de la requête
        $page = $request->input('page', 1);

        // Vérifier que la page est dans la plage valide (1 à 500)
        $page = max(1, min(500, $page));

        $token = env('TMDB_API_KEY');
        $urlSeries = "https://api.themoviedb.org/3/tv/popular?language=fr-FR&page=$page";

        // Series.

        $client = new Client();{
            $responseSeries = $client->get($urlSeries, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            // Maintenant, on stocke les données des séries.

            $dataSeries = Collection::make(json_decode($responseSeries->getBody(), true)['results']);
            $totalPages = json_decode($responseSeries->getBody(), true)['total_pages'];



            $content = [$dataSeries];

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

            // on retourne les données

            return view('series.series', ['series' => $dataSeries,'page' => $page,'totalPages' => $totalPages]);

        }

    }

    public function show_details(Request $request)
    {

        // on retourne les données

        return view('series.details_series');

    }

}
