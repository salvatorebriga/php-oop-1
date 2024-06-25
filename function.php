<?php

function createMovie(string $url, string $title, int $year, array $genres = [], array $additionalGenres = []): ?Movie
{

    $movie = new Movie($url, $title, $year, $genres);

    foreach ($additionalGenres as $genre) {
        $movie->addMovieGenere($genre);
    }

    return $movie;
}
