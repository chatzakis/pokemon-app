@extends('layouts.app')

@section('content')

    @foreach($pokemons as $pokemon)
        <div id="card-{{ $pokemon->id }}" class="row align-items-center pokemon-card mb-5 {{ $pokemon->favorite ? 'in-favorites' : '' }}">
            <div class="col-lg-5 image-col p-0">
                <div class="pokemon-height bubble">{{ $pokemon->height }} dm</div>
                <div class="pokemon-weight bubble">{{ $pokemon->weight }} hg</div>
                <div class="pokemon-index"># {{ $pokemon->id }}</div>
                <div class="image-bg">
                    <img class="img-fluid pokemon-image" src="{{ $pokemon->image }}" alt="{{ $pokemon->name }}">
                    <div class="pokemon-name">{{ ucfirst($pokemon->name) }}</div>
                    <div class="pokemon-class pb-3">{{ ucfirst($pokemon->species) }}</div>
                </div>
            </div>
            <div class="col-lg-7 stat-col">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="attr-name">Speed</td>
                            <td class="attr-value">{{ $pokemon->speed}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->speed/200*100}}%" aria-label="Speed" aria-valuenow="{{ $pokemon->speed}}" aria-valuemin="0" aria-valuemax="200"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="attr-name">Special Defense</td>
                            <td class="attr-value">{{ $pokemon->special_defense}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->special_defense/230*100}}%" aria-label="Special Defense" aria-valuenow="{{ $pokemon->special_defense}}" aria-valuemin="0" aria-valuemax="230"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="attr-name">Special Attack</td>
                            <td class="attr-value">{{ $pokemon->special_attack}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->special_attack/200*100}}%" aria-label="Special Attack" aria-valuenow="{{ $pokemon->special_attack}}" aria-valuemin="0" aria-valuemax="200"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="attr-name">Defense</td>
                            <td class="attr-value">{{ $pokemon->defense}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->defense/230*100}}%" aria-label="defense" aria-valuenow="{{ $pokemon->defense}}" aria-valuemin="0" aria-valuemax="230"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="attr-name">Attack</td>
                            <td class="attr-value">{{ $pokemon->attack}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->attack/190*100}}%" aria-label="Attack" aria-valuenow="{{ $pokemon->attack}}" aria-valuemin="0" aria-valuemax="190"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="attr-name">Hp</td>
                            <td class="attr-value">{{ $pokemon->hp}}</td>
                            <td class="attr-bar">
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $pokemon->hp/255*100}}%" aria-label="Basic example" aria-valuenow="{{ $pokemon->hp}}" aria-valuemin="0" aria-valuemax="255"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button id="fav-{{ $pokemon->id }}" type="button" class="btn btn-danger favorite-btn" data-pokemon-id="{{ $pokemon->id }}">
                <i class="{{ $pokemon->favorite ? 'fa-solid' : 'fa-regular' }} fa-heart"></i>  {{ $pokemon->favorite ? 'Remove from Favorites' : 'Add to Favorites' }}
            </button>
        </div> 
    @endforeach
    </div>
    <!-- Pagination links -->
    <div id="pokemon-pagination" class=" d-flex justify-content-center mt-4">
        {{ $pokemons->links() }}
    </div>
@endsection
