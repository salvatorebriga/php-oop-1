<?php

function createMovie(string $url, string $title, $year, array $genres = [], array $additionalGenres = []): ?Movie
{
    try {
        if (!is_numeric($year) || !is_int((int) $year)) {
            throw new InvalidArgumentException("Year must be a valid integer.");
        }

        $movie = new Movie($url, $title);

        $year = (int) $year;

        $movie->setMovieAnno($year);
        $movie->setMovieGenere($genres);

        foreach ($additionalGenres as $genre) {
            $movie->addMovieGenere($genre);
        }

        return $movie;
    } catch (InvalidArgumentException $e) {
        echo 'InvalidArgumentException: ' . $e->getMessage() . '<br>';
        return null;
    } catch (Exception $e) {
        echo 'Eccezione: ' . $e->getMessage() . '<br>';
        return null;
    }
}
