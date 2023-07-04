<?php

class Film
{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private $_acteurs = array();
    private $_roles = array();
    private Genre $_genre;
    private string $_synopsis;

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, $acteurs, $roles, Genre $genre, string $synopsis = "")
    {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;

        $this->_realisateur->ajouterFilm($this);

        foreach ($acteurs as $acteur)
        {
            if (get_class($acteur) == "Acteur") // On s'assure que le tableau contient bien des objets de type "Acteur"
            {
                $this->_acteurs[] = $acteur;
                $acteur->ajouterFilm($this);
            }
        }

        foreach ($roles as $role)
        {
            if (get_class($role) == "Role") // On s'assure que le tableau contient bien des objets de type "Role"
            {
                $this->_roles[] = $role;
            }
        }

        $this->_genre->ajouterFilm($this);
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getDateSortie()
    {
        return $this->$_dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }

    public function getDuree()
    {
        return $this->$_duree;
    }

    public function setDuree($duree)
    {
        $this->_duree = $duree;
    }

    public function getRealisateur()
    {
        return $this->$_realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->_realisateur = $realisateur;
    }

    public function getGenre()
    {
        return $this->$_genre;
    }

    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }

    public function getSynopsis()
    {
        return $this->$_synopsis;
    }

    public function setSynopsis($synopsis)
    {
        $this->_synopsis = $synopsis;
    }

    public function __toString()
    {
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
        return $this->_titre . " - Durée : " . $this->_duree . " minutes, sorti le " . $formatter->format($this->_dateSortie) . " - Genre : " . $this->_genre;
    }

    // Affiche le casting du film
    public function afficherCasting()
    {
        $result = "<h1>Dans le film " . $this->_titre . " :</h1>";

        foreach ($this->_acteurs as $acteur) // Pour chaque acteur du film
        {
            foreach ($this->_roles as $role) // Parcours chaque rôle du film
            {
                if (in_array($acteur, $role->getActeurs())) // Vérifie que l'acteur à joué le rôle
                {
                    $result .= $role->getNom() . " à été incarné par " . $acteur->getPrenom() . " " . $acteur->getNom() . "</br>";
                }
            }
        }

        return $result;
    }
}