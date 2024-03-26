<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Services\NewsServices;
use App\Http\Controllers\BlogController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{

    public function test_instantiation_with_news_services_object()
    {
        $newsServicesMock = $this->createMock(NewsServices::class);
        $blogController = new BlogController($newsServicesMock);

        $this->assertInstanceOf(BlogController::class, $blogController);
    }

    public function test_index_method_returns_empty_news_array_when_no_news()
    {
        $requestMock = $this->createMock(Request::class);
        $newsServicesMock = $this->createMock(NewsServices::class);
        $newsServicesMock->method('getNewsList')->willReturn(['articles' => [], 'totalPages' => 0]);
        $newsServicesMock->method('getAuthorsList')->willReturn([]);

        $blogController = new BlogController($newsServicesMock);
        $response = $blogController->index($requestMock);

        $this->assertEmpty($response->news);
    }
}
