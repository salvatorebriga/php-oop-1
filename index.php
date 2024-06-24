<?php

class Movie
{
    public string $titolo;
    public int $anno;

    public function __construct(string $_titolo)
    {
        $this->titolo = $_titolo;
    }

    public function getMovieTitle(): string
    {
        return $this->titolo;
    }

    public function setMovieTitle(string $_titolo): void
    {
        $this->titolo = $_titolo;
    }

    public function setMovieAnno(int $_anno): void
    {
        $this->anno = $_anno;
    }

    public function getMovieAnno(): int
    {
        return $this->anno;
    }
}
