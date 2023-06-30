<?php

require_once("Personne.php");
require_once("Realisateur.php");
require_once("Acteur.php");
require_once("Genre.php");
require_once("Film.php");

// Tableau des réalisateurs

$realisateurs = [
    new Realisateur("Abrams", "Jeffrey Jacob", "Homme", "1966-06-27"),
    new Realisateur("Ridley", "Scott", "Homme", "1937-11-30")
];

// Tableau des genres

$genres = [
    new Genre("Science-fiction"),
    new Genre("Aventure"),
    new Genre("Action")
];

// Tableau des acteurs

/*$acteurs = [
    new Acteur("Ridley", "Daisy", "Femme", "1992-04-10"),
    new Acteur("Boyega", "Jhon", "Homme", "1992-03-17"),
    new Acteur("Isaac", "Oscar", "Homme", "1979-03-09"),
    new Acteur("Fisher", "Carrie", "Femme", "1956-10-21"),
    new Acteur("Ford", "Harrison", "Homme", "1942-07-13"),
    new Acteur("Hauer", "Rutger", "Homme", "1944-01-23"),
    new Acteur("Young", "Sean", "Femme", "1959-11-19"),
    new Acteur("Olmos", "Edward James", "Homme", "1947-02-24"),
    new Acteur("Hannah", "Dary", "Femme", "1960-12-03")
];*/

// Tableau des films

$films = [
    new Film("Star Wars - Le reveil de la force", "2015-12-16", 138, $realisateurs[0], $genres[0]),
    new Film("Blade Runner", "1982-09-15", 111, $realisateurs[1], $genres[0]),
];



echo $genres[0]->afficherFIlms();

echo $realisateurs[0]->afficherFIlms();