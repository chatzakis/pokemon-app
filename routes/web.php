<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', [PokemonController::class, 'index']);

Route::post('/pokemons/{id}/favorite', [PokemonController::class, 'toggleFavorite']);

Route::get('/pokemons/search', [PokemonController::class, 'search']);