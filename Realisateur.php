<?php

class Realisateur extends Personne
{
    private $_films = array();

    public function __toString()
    {
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $this->_nom . " " . $this->_prenom . " (" . $this->_sexe . ") Né" . ($this->_sexe == "Femme" ? "e" : "") . " le " . $formatter->format($_dateNaissance);
    }

    // Ajoute un film réalisé par ce réalisateur
    public function ajouterFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    // Affiche tout les films correspondant au genre
    public function afficherFilms()
    {
        $result = "<h1>Liste des films de " . $this->_nom . " " . $this->_prenom . " :</h1>";

        foreach ($this->_films as $film)
        {
            $result .= "$film </br>";
        }

        return $result;
    }
}