@extends('layouts.app')
@section('title', 'News')
@section('content')
    <div class="container mt-5">
        <h1>Blog / Noticiero</h1>
        <div class="row">
            @foreach ($news as $key => $article)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <p class="card-text">{{ $article['description'] }}</p>
                            <p class="card-text">
                                <small class="text-muted">Autor: {{ $authors[$key]['name']['first'] }}
                                    {{ $authors[$key]['name']['last'] }}
                                </small> <br>
                                <small class="text-muted">Email: {{ $authors[$key]['email'] }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination mt-4">
                <li class="page-item {{ $page == 1 ? 'disabled' : '' }}">
                    <a class="page-link" href="#" data-page="{{ $page - 1 }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo; Anterior</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li class="page-item {{ $i == $page ? 'active' : '' }}">
                        <a class="page-link" href="#" data-page="{{ $i }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $page == $totalPages ? 'disabled' : '' }}">
                    <a class="page-link" href="#" data-page="{{ $page + 1 }}" aria-label="Siguiente">
                        <span aria-hidden="true">Siguiente &raquo;</span>
                    </a>
                </li>
                
            </ul>
        </nav>        
    </div>
@endsection

