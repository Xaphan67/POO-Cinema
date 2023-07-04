<?php

class Acteur extends Personne
{
    private $_castings = array();

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent:: __construct($nom, $prenom, $sexe, $dateNaissance);
    }

    // Ajoute le casting de cet acteur
    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    // Affiche la liste des films dans lesquels l'acteur à joué
    public function afficherFilms()
    {
        $result = "<h1>Liste des films dans lequels " . $this->_nom . " " . $this->_prenom . " à joué :</h1>";

        foreach ($this->_castings as $casting)
        {
            $result .= $casting->getFilm() . " </br>";
        }

        return $result;
    }
}