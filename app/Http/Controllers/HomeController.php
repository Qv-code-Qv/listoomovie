<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;
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

    protected $tmdbService;



    public function index()
    {

        $token = env('TMDB_API_KEY');
        $url = 'https://api.themoviedb.org/3/tv/popular';

        $client = new Client(); {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Maintenant, $data contient les séries populaires. Fais ce que tu veux avec les données.

            response()->json($data);


            return view('home', ['series' => $data['results']]);
        }
    }
}
