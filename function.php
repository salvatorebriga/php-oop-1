<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Actor.php';

function createMovie(string $url, string $title, int $year, string $actorName, int $actorAge, array $genres = [], array $additionalGenres = []): ?Movie
{
    try {
        $actor = new Actor($actorName, $actorAge);
        $movie = new Movie($url, $title, $year, $genres, $actor);

        foreach ($additionalGenres as $genre) {
            $movie->addMovieGenere($genre);
        }

        return $movie;
    } catch (Exception $e) {
        echo "Errore nella creazione del film: " . $e->getMessage();
        return null;
    }
}
