<?php

require_once __DIR__ . '/Models/Movie.php';

require_once __DIR__ . '/function.php';

$fight_club = createMovie('https://m.media-amazon.com/images/M/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 'Fight Club', 1999, ['Drama', 'Action'], ['Psychological', 'Yellow']);
$il_gladiatore = createMovie('https://italyformovies.it/app/img/film/locandine/il_gladiatore_locandina_1546942592.webp', 'Il Gladiatore', 2001, ['Historical', 'Adventure', 'Drama'], ['Action', 'Compelling']);
$we_were_soldier = createMovie('https://m.media-amazon.com/images/S/pv-target-images/9f6c4ad7118bad5771bc4b5bd0226540fac8ed7766b2b6abb40730565abef824.jpg', 'We Were Soldier', 'prova', ['Historical', 'Adventure', 'Drama'], ['Action', 'War']);
$troy = createMovie('https://m.media-amazon.com/images/M/MV5BMTk5MzU1MDMwMF5BMl5BanBnXkFtZTcwNjczODMzMw@@._V1_.jpg', 'Troy', 2002, ['Historical', 'Adventure', 'Drama'], ['Action', 'Adult']);



$movies = array_filter([$fight_club, $il_gladiatore, $we_were_soldier, $troy]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>OOP Movie</title>
</head>

<body>
    <div class="container text-center">
        <header>
            <h2 class="my-3">OOP Movie DB</h2>
        </header>
        <main>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo $movie->getMovieUrl() ?>" alt="<?php echo $movie->getMovieUrl() ?>">
                                </div>
                                <h5 class="card-title"><?php echo htmlspecialchars($movie->getMovieTitle(), ENT_QUOTES, 'UTF-8'); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?php
                                    try {
                                        echo htmlspecialchars($movie->getMovieAnno(), ENT_QUOTES, 'UTF-8');
                                    } catch (Exception $e) {
                                        echo 'Anno non disponibile';
                                    }
                                    ?>
                                </h6>
                                <p class="card-text">
                                    <?php echo implode(', ', array_map('htmlspecialchars', $movie->getMovieGenere())); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
        <footer></footer>
    </div>

</body>

</html>