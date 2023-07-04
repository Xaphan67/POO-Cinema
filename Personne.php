<?php

class Personne
{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    
    public function getSexe()
    {
        return $this->_sexe;
    }

    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
}