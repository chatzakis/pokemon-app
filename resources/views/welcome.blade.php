<!-- This is a design template -->

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemon App</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/app.css">

        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/c2d17406e6.js" crossorigin="anonymous"></script>


    </head>
    <body class="">
        <section class="">
        <h1 class="my-5 text-center">Pokemon Catalog</h1>
        <div class="container text-center">
            <div class="row pokemon-card">
                <div class="col-lg-5 image-col p-0">
                    <div class="pokemon-height bubble">1 m</div>
                    <div class="pokemon-weight bubble">100 kg</div>
                    <div class="pokemon-index">#234</div>
                    <div class="pokemon-class">Pokemon tou peous</div>
                    <div class="image-bg">
                        <img class="img-fluid pokemon-image" src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png">
                    </div>
                </div>
                <div class="col-lg-7 stat-col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="attr-name">Speed</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="attr-name">Special Defense</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="attr-name">Special Attack</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="attr-name">Defense</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="attr-name">Attack</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="attr-name">Hp</td>
                                <td class="attr-value">130</td>
                                <td class="attr-bar">
                                    <div class="progress mt-1">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-label="Basic example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-danger like"><i class="fa-regular fa-heart"></i> Add to favorites</button>
            </div> 
            </div>
        </section>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
