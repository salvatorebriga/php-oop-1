<?php

class Movie
{
    private string $url;
    private string $titolo;
    private int $anno;
    private array $genere = [];
    private Actor $actor;

    public function __construct(string $_url, string $_titolo, int $_anno, array $_genere, Actor $_actor)
    {
        $this->setMovieUrl($_url);
        $this->setMovieTitle($_titolo);
        $this->setMovieAnno($_anno);
        $this->setMovieGenere($_genere);
        $this->actor = $_actor;
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
        return $this->url;
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
        return $this->titolo;
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
        return $this->anno;
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
        return $this->genere;
    }

    public function addMovieGenere(string $_genere): void
    {
        if (!is_string($_genere)) {
            throw new Error("Dato errato");
        } else {
            $this->genere[] = $_genere;
        }
    }

    public function getActor(): Actor
    {
        return $this->actor;
    }
}
