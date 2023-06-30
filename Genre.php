<?php

class Genre
{
    private string $_nom;
    private $_films = array();

    public function __construct(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom()
    {
        $this->_nom = $nom;
    }

    public function getFilms()
    {
        return $this->_films;
    }

    public function __toString()
    {
        return $this->_nom;
    }

    // Ajoute un film correspondant à ce genre
    public function ajouterFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    // Affiche tous les films correspondant au genre
    public function afficherFilms()
    {
        $result = "<h1>Liste des films de " . $this->_nom . " :</h1>";

        foreach ($this->_films as $film)
        {
            $result .= "$film </br>";
        }

        return $result;
    }
}