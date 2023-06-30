<?php

class Realisateur extends Personne
{
    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
}