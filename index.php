<?php

class Movie
{
    private string $titolo;
    private int $anno;

    public function __construct(string $_titolo)
    {
        $this->titolo = $_titolo;
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
        return $this->anno;
    }
}

$fight_club = new Movie('Fight Club');
$il_gladiatore = new Movie('Il Gladiatore');

//Gestiscto un exception per settare l'anno di un Movie
try {
    //presupponiamo che questo valore arrivi tramite input utente
    // $input = 'stringa prova;
    $input = 1999;
    if (!is_int($input)) {
        throw new Exception('Is not a number');
    } else {
        // funzione riutilizzabile, basta parametrizzare l'else 
        // $object->setMovieAnno($input);
        $fight_club->setMovieAnno($input);
        $il_gladiatore->setMovieAnno($input);
    }
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}




var_dump($fight_club);
echo '<br>';
var_dump($il_gladiatore);
