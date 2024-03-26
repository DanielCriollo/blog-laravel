<?php

namespace App\Http\Controllers;

use App\Services\NewsServices;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    private $newsServices;

    public function __construct(NewsServices $newsServices)
    {
        $this->newsServices = $newsServices;
    }

    public function index(Request $request, $page = 1)
    {
        $result = $this->newsServices->getNewsList($page);

        $news = $result['articles'];
        $totalPages = $result['totalPages'];
        $authors = $this->newsServices->getAuthorsList();

        return view('blogs.index', compact('news', 'authors', 'totalPages', 'page'));
    }
}