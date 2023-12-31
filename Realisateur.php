<?php

class Realisateur extends Personne
{
    private $_films = array();

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent:: __construct($nom, $prenom, $sexe, $dateNaissance);
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