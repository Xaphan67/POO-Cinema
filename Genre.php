<?php

class Genre
{
    private string $_nom;

    public function __construct(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getGenre()
    {
        return $this->_nom;
    }

    public function setGenre()
    {
        $this->_nom = $nom;
    }

    public function __toString()
    {
        return $this->_nom;
    }
}