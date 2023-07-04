<?php

class casting
{
    private Acteur $_acteur;
    private Film $_film;
    private Role $_role;

    public function __construct(Acteur $acteur, Film $film, Role $role) {
        $this->_acteur = $acteur;
        $this->_film = $film;
        $this->_role = $role;
    }

    public function getActeur()
    {
        return $this->_acteur;
    }

    public function setActeur($acteur)
    {
        $this->_acteur = $acteur;
    }

    public function getFilm()
    {
        return $this->_film;
    }

    public function setFilm($film)
    {
        $this->_film = $film;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }
}