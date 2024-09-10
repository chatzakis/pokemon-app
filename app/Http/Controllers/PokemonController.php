<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PokemonController extends Controller
{
    public function index()
    {
        // Fetch Pokémon data with pagination (12 per page)
        $pokemons = Pokemon::orderBy('id', 'asc')->paginate(12);

        // Pass the paginated Pokémon data to the view
        return view('index', compact('pokemons'));
    }

    public function toggleFavorite($id, Request $request)
    {
        $pokemon = Pokemon::find($id);

        if (!$pokemon) {
            return response()->json(['error' => 'Pokemon not found.'], 404);
        }

        // Toggle the favorite status
        $pokemon->favorite = !$pokemon->favorite;
        $pokemon->save();

        return response()->json(['favorite' => $pokemon->favorite]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $pokemons = Pokemon::where('name', 'LIKE', "%{$query}%")->paginate(12);
            
            return view('partials/search', compact('pokemons'));
        }
    
        return response()->json(['message' => 'No Pokémon found'], 404);
    }
}
