<?php

class Movie
{
    private string $url;
    private string $titolo;
    private int $anno;
    private array $genere = [];

    public function __construct(string $_url, string $_titolo, int $_anno, array $_genere)
    {
        $this->setMovieUrl($_url);
        $this->setMovieTitle($_titolo);
        $this->setMovieAnno($_anno);
        $this->setMovieGenere($_genere);
    }

    public function setMovieUrl(string $_url): void
    {
        if (!is_string($_url)) {
            throw new Error("Dato errato");
        } else {
            $this->url = $_url;
        }
    }

    public function getMovieUrl(): string
    {
        if (!is_string($this->url)) {
            throw new Error("Dato errato");
        } else {
            return $this->url;
        }
    }

    public function setMovieTitle(string $_titolo): void
    {
        if (!is_string($_titolo)) {
            throw new Error("Dato errato");
        } else {
            $this->titolo = $_titolo;
        }
    }

    public function getMovieTitle(): string
    {
        if (!is_string($this->titolo)) {
            throw new Error("Dato errato");
        } else {
            return $this->titolo;
        }
    }

    public function setMovieAnno(int $_anno): void
    {
        if (!is_int($_anno)) {
            throw new Error("Dato errato");
        } else {
            $this->anno = $_anno;
        }
    }

    public function getMovieAnno(): int
    {
        if (!is_int($this->anno)) {
            throw new Error("Dato errato");
        } else {
            return $this->anno;
        }
    }

    public function setMovieGenere(array $_genere): void
    {
        if (!is_array($_genere)) {
            throw new Error("Dato errato");
        } else {
            $this->genere = $_genere;
        }
    }

    public function getMovieGenere(): array
    {
        if (!is_array($this->genere)) {
            throw new Error("Dato errato");
        } else {
            return $this->genere;
        }
    }

    public function addMovieGenere(string $_genere): void
    {
        if (!is_string($_genere)) {
            throw new Error("Dato errato");
        } else {
            $this->genere[] = $_genere;
        }
    }
}
