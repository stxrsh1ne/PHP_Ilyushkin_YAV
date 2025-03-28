<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'showGamePage']);

Route::post('/games', [GameController::class, 'createGame']);
Route::post('/step/{id}', [GameController::class, 'makeStep']);
Route::get('/games', [GameController::class, 'getGames']);