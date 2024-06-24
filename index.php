<?php

class Movie
{
    private string $titolo;
    private int $anno;
    public array $genere;

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

    public function setMovieGenere(int $_genere): void
    {
        $this->anno = $_genere;
    }

    public function getMovieGenere(): array
    {
        return $this->genere;
    }
}

$fight_club = new Movie('Fight Club');
$il_gladiatore = new Movie('Il Gladiatore');

//Gestiscto due exception per settare l'anno di un Movie
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







var_dump($fight_club);
echo '<br>';
var_dump($il_gladiatore);
