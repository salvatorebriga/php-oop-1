<?php

require_once __DIR__ . '/Models/Movie.php';

require_once __DIR__ . '/function.php';

try {
    $fight_club = createMovie('https://m.media-amazon.com/images/M/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 'Fight Club', 1999, ['Drama', 'Action'], ['Psychological', 'Yellow']);
} catch (Error $e) {
    echo $e->getMessage();
}

try {
    $il_gladiatore = createMovie('https://italyformovies.it/app/img/film/locandine/il_gladiatore_locandina_1546942592.webp', 'Il Gladiatore', 2004, ['Historical', 'Adventure', 'Drama'], ['Action', 'Compelling']);
} catch (Error $e) {
    echo $e->getMessage();
}

try {
    $american_sniper = createMovie('https://pad.mymovies.it/filmclub/2014/10/026/locandina.jpg', 'American Sniper', 2002, ['Historical', 'Adventure', 'Drama'], ['Action', 'War']);
} catch (Error $e) {
    echo 'Caught Error' . $e->getMessage();
}

try {
    $troy = createMovie('https://m.media-amazon.com/images/M/MV5BMTk5MzU1MDMwMF5BMl5BanBnXkFtZTcwNjczODMzMw@@._V1_.jpg', 'Troy', 2001, ['Historical', 'Adventure', 'Drama'], ['Action', 'Adult']);
} catch (Error $e) {
    echo $e->getMessage();
}

$movies = array_filter([$fight_club, $il_gladiatore, $american_sniper, $troy]);

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

<body class="bg-dark">
    <div class="container text-center">
        <header>
            <h1 class="my-3 text-danger">OOP Movie DB</h1>
        </header>
        <main>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col mb-3">
                        <div class="card bg-dark border-0 text-light">
                            <div class="card-body">
                                <div class="card-img mb-3">
                                    <img src="<?php echo $movie->getMovieUrl() ?>" alt="<?php echo $movie->getMovieUrl() ?>">
                                </div>
                                <h5 class="card-title"><?php echo htmlspecialchars($movie->getMovieTitle(), ENT_QUOTES, 'UTF-8'); ?></h5>
                                <h6 class="card-subtitle mb-2 text-light"><?php echo $movie->getMovieAnno(); ?>
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