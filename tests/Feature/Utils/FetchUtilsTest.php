<?php

namespace Tests\Feature\Utils;

use Tests\TestCase;
use GuzzleHttp\Client;
use App\Utils\FetchUtils;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FetchUtilsTest extends TestCase
{
    public function test_fetchNewsArticles_returns_array_with_expected_keys_and_values()
    {

        $expectedKeys = ['source', 'author', 'title', 'description', 'url', 'urlToImage', 'publishedAt', 'content'];


        $articles = FetchUtils::fetchNewsArticles();


        $this->assertIsArray($articles);
        $this->assertNotEmpty($articles);
        foreach ($articles as $article) {
            $this->assertIsArray($article);
            foreach ($expectedKeys as $key) {
                $this->assertArrayHasKey($key, $article);
            }
        }
    }

}
