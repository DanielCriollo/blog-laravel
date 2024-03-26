<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('news.page');
});

Route::get('/news/{page?}', [BlogController::class, 'index'])->name('news.page');
