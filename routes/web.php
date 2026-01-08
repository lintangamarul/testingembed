<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmbedController; 


Route::get('/', [EmbedController::class, 'showEmbed']);

Route::get('/embed-demo', [EmbedController::class, 'showEmbed'])->name('embed.demo');
Route::get('/embed-demo/ribbed-deck', [EmbedController::class, 'showRibbedDeck'])->name('embed.calculator.ribbed-deck');
Route::get('/embed-demo/beam-penetration', [EmbedController::class, 'showBeamPenetration'])->name('embed.calculator.beam-penetration');
Route::get('/embed-demo/clt-wall', [EmbedController::class, 'showCltWall'])->name('embed.calculator.clt-wall');
Route::get('/embed-demo/timber-concrete-composite', [EmbedController::class, 'showTimberConcreteComposite'])->name('embed.calculator.timber-concrete-composite');

