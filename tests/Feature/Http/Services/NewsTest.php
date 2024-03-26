<?php

namespace Tests\Feature\Http\Services;

use Tests\TestCase;
use ReflectionClass;
use GuzzleHttp\Client;
use App\Services\NewsServices;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends TestCase
{

    public function test_get_news_list_returns_articles_and_total_pages()
    {

        $newsServices = new NewsServices();

        $result = $newsServices->getNewsList();

        $this->assertArrayHasKey('articles', $result);
        $this->assertArrayHasKey('totalPages', $result);
    }


}
