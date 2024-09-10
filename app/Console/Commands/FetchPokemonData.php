<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Log;

class FetchPokemonData extends Command
{
    protected $signature = 'fetch:pokemon';
    protected $description = 'Fetch all Pokémon data from PokeAPI and store it in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Fetching Pokémon list...');

        // Fetch the first 1500 Pokémon from PokeAPI
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=1500');

        if ($response->successful()) {
            $pokemons = $response->json()['results'];

            foreach ($pokemons as $pokemon) {
                $this->info('Fetching data for: ' . $pokemon['name']);
                
                // Fetch detailed data for each Pokémon
                $pokemonDetails = Http::get($pokemon['url']);

                if ($pokemonDetails->successful()) {
                    $details = $pokemonDetails->json();

                    // Extract image URL
                    $imageUrl = $details['sprites']['front_default'] ?? null;

                    // Fetch Pokémon species information (second API call)
                    $speciesResponse = Http::get($details['species']['url']);
                    $speciesName = null;

                    if ($speciesResponse->successful()) {
                        $speciesDetails = $speciesResponse->json();
                        $speciesName = $speciesDetails['name'] ?? null;
                    }

                    $stats = collect($details['stats'])->keyBy('stat.name');

                    // Store or update Pokémon data in the database
                    Pokemon::updateOrCreate(
                        ['id' => $details['id']], // Use the unique PokeAPI ID
                        [
                            'name' => $details['name'],
                            'image' => $imageUrl, 
                            'species' => $speciesName, 
                            'height' => $details['height'],
                            'weight' => $details['weight'],
                             // Save stats into the database
                            'hp' => $stats['hp']['base_stat'],
                            'attack' => $stats['attack']['base_stat'],
                            'defense' => $stats['defense']['base_stat'],
                            'special_attack' => $stats['special-attack']['base_stat'],
                            'special_defense' => $stats['special-defense']['base_stat'],
                            'speed' => $stats['speed']['base_stat'],
                        ]
                    );

                    $this->info('Stored: ' . $details['name']);
                } else {
                    $this->error('Failed to fetch details for: ' . $pokemon['name']);
                }
            }

            $this->info('Successfully fetched and stored all Pokémon.');
        } else {
            $this->error('Failed to fetch Pokémon list.');
        }
    }
}

