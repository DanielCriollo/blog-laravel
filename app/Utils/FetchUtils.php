<?php
namespace App\Utils;

use GuzzleHttp\Client;

class FetchUtils{
    public static function fetchNewsArticles()
    {
        $client = new Client();

        $allNewsResponse = $client->get('https://newsapi.org/v2/top-headlines', [
            'query' => [
                'apiKey' => config('services.newsapi.key'),
                'country' => 'de',
                'category' => 'business',
                'pageSize' => 100
            ],
        ]);

        return json_decode($allNewsResponse->getBody(), true)['articles'];
    }

    public static function fetchAuthors($numberRegister)
    {
        $client = new Client();
        $response = $client->get('https://randomuser.me/api/', [
            'query' => [
                'results' => $numberRegister,
            ],
        ]);

        return json_decode($response->getBody(), true)['results'];
    }

    public static function formatAuthors($authors)
    {
        return collect($authors)->map(function ($author) {
            return [
                'name' => [
                    'first' => $author['name']['first'],
                    'last' => $author['name']['last'],
                ],
                'email' => $author['email']
            ];
        })->all();
    }
}