<?php

class Movie
{
    private string $url;
    private string $titolo;
    private int $anno;
    private array $genere = [];

    public function __construct(string $_url, string $_titolo)
    {
        $this->url = $_url;
        $this->titolo = $_titolo;
    }

    public function setMovieUrl(string $_url): void
    {
        $this->url = $_url;
    }

    public function getMovieUrl(): string
    {
        return $this->url;
    }

    public function setMovieTitle(string $_titolo): void
    {
        $this->titolo = $_titolo;
    }

    public function getMovieTitle(): string
    {
        return $this->titolo;
    }

    public function setMovieAnno(int $_anno): void
    {
        $this->anno = $_anno;
    }

    public function getMovieAnno(): int
    {
        if (!isset($this->anno)) {
            throw new Exception("Anno non impostato");
        }
        return $this->anno;
    }

    public function setMovieGenere(array $_genere): void
    {
        $this->genere = $_genere;
    }

    public function getMovieGenere(): array
    {
        return $this->genere;
    }

    public function addMovieGenere(string $_genere): void
    {
        $this->genere[] = $_genere;
    }
}
