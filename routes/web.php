<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmbedController;

Route::get('/', [EmbedController::class, 'showEmbed']);

