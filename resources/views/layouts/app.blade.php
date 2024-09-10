<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pokemon App</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/app.css">

        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/c2d17406e6.js" crossorigin="anonymous"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body class="">
        <main class="py-4">
            <div class="container">
            <h1 class="text-center my-4">Pokémon List</h1>
            <div class="container-fluid">
                <div class="d-flex search-form my-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search Pokémon by name..." />
                    <button id="searchBtn" class="btn btn-danger p-2"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                </div>
            </div>

            <div class="row results">
                @yield('content')
            </div>
        </main>
        <script src="{{ asset('js/favorites.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>
        <script src="{{ asset('js/bar-colors.js') }}"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

