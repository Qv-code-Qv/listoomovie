<?php
// TmdbService.php

namespace App\Services;

use GuzzleHttp\Client;

class TmdbService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
        ]);

        $this->apiKey = config('services.tmdb.api_key');
    }

    public function getMovieDetails($movieId)
    {
        $response = $this->client->get("movie/{$movieId}", [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhN2RjYWE1ZjA0ZjFmZWIwZWQ0N2I0N2Q5MzczYmZkMCIsInN1YiI6IjY1NzJlYTBiYzRmNTUyMDBhYzIyMmEyNSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.p4fwmZdCYfScvWt23wgDPaZBcRfsK7S1OkTdO75jq-Q',
                'accept' => 'application/json',
              ],

        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
