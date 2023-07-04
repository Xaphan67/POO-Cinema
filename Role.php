<?php

class Role
{
    private string $_nom;
    private $_acteurs = array();

    public function __construct(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getActeurs()
    {
        return $this->_acteurs;
    }

    public function setActeurs($acteurs)
    {
        $this->_acteurs = $acteurs;
    }

    public function __toString()
    {
        return $this->_nom;
    }

    public function ajouterActeur(Acteur $acteur)
    {
        $this->_acteurs[] = $acteur;
    }

    // Affiche les acteurs ayant eu ce rôle
    public function afficherActeurs()
    {
        $result = "<h1>Acteurs ayant joué le rôle de " . $this->_nom . " :</h1>";

        foreach ($this->_acteurs as $acteur)
        {
            $result .= "$acteur </br>";
        }

        return $result;
    }
}