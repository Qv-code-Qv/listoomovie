<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

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



     public function index(){

        $results = [];

        $apiKey = config('app.tmdb_api_key');
        $response = Http::get("https://api.themoviedb.org/3/tv/popular", [
            'api_key' => $apiKey,
        ]);

        $series = $response->json($results);

        return view('home', compact('series'));

     }

}
