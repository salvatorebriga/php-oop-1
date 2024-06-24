<?php

class Movie
{
    private string $titolo;
    private int $anno;
    private array $genere = [];

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

$fight_club = new Movie('Fight Club');
$il_gladiatore = new Movie('Il Gladiatore');

//Gestisco due exception per settare l'anno di un Movie
try {
    //presupponiamo che questo valore arrivi tramite input utente
    $inputGiusto = 1999;
    if (!is_int($inputGiusto)) {
        throw new Exception('Is not a number');
    } else {
        // funzione riutilizzabile, basta parametrizzare l'else 
        // $object->setMovieAnno($input);
        $fight_club->setMovieAnno($inputGiusto);
    }
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

try {
    //presupponiamo che questo valore arrivi tramite input utente
    $inputSbagliato = 'prova';
    if (!is_int($inputSbagliato)) {
        throw new Exception('Is not a number');
    } else {
        // funzione riutilizzabile, basta parametrizzare l'else 
        // $object->setMovieAnno($input);
        $il_gladiatore->setMovieAnno($inputSbagliato);
    }
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

// metodo set
$fight_club->setMovieGenere(['Drama', 'Action']);
$il_gladiatore->setMovieGenere(['Historical', 'Adventure', 'Drama']);
// metodo add, la differenza è chiara
$fight_club->addMovieGenere('Psychological');
$fight_club->addMovieGenere('Yellow');
$il_gladiatore->addMovieGenere('Action');
$il_gladiatore->addMovieGenere('Compelling');


// stampa dei risultati
var_dump($fight_club);
echo '<br>';
var_dump($il_gladiatore);
