<?php

class Acteur extends Personne
{
    public function __toString()
    {
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $this->_nom . " " . $this->_prenom . " (" . $this->_sexe . ") Né" . ($this->_sexe == "Femme" ? "e" : "") . " le " . $formatter->format($_dateNaissance);
    }
}