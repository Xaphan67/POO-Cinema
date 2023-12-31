<?php

class Film
{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private $_castings = array();
    private Genre $_genre;
    private string $_synopsis;

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis = "")
    {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;

        $this->_realisateur->ajouterFilm($this);
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

    // Ajoute le casting de ce film
    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    // Affiche le casting du film
    public function afficherCasting()
    {
        $result = "<h1>Dans le film " . $this->_titre . " :</h1>";

        foreach ($this->_castings as $casting)
        {
            $result .= $casting->getActeur() . " à été incarné par " . $casting->getRole() . "</br>";
        }

        return $result;
    }
}