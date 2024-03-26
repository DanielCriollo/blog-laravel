<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Utils\FetchUtils;

class NewsServices
{
    private $fetchUtils;
    private $numberRegister = 10;

    public function __construct(FetchUtils $fetchUtils)
    {
        $this->fetchUtils = $fetchUtils;
    }

    public function getNewsList($page = 1)
    {
        $allArticles = $this->fetchUtils->fetchNewsArticles();
        
        $totalArticles = count($allArticles);
        $articles = array_slice($allArticles, ($page - 1) * $this->numberRegister, $this->numberRegister);
        $totalPages = ceil($totalArticles / $this->numberRegister);

        return [
            'articles' => $articles,
            'totalPages' => $totalPages
        ];
    }

    public function getAuthorsList()
    {
        $authors = $this->fetchUtils->fetchAuthors($this->numberRegister);
        return $this->fetchUtils->formatAuthors($authors);
    }
}