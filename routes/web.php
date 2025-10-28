<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmbedController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/embed-demo', [EmbedController::class, 'showEmbed']);

