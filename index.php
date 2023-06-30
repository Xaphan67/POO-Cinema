<?php

// Auto-load des fichiers contenant les classes requises
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

// Réalisateurs
$abramsJJ = new Realisateur("Abrams", "Jeffrey Jacob", "Homme", "1966-06-27");
$ridleyScott = new Realisateur("Ridley", "Scott", "Homme", "1937-11-30");

// Genres
$scienceFi = new Genre("Science-fiction");
$aventure = new Genre("Aventure");
$action = new Genre("Action");

// Tableau des acteurs

$ridleyDaisy = new Acteur("Ridley", "Daisy", "Femme", "1992-04-10");
$boyegaJhon = new Acteur("Boyega", "Jhon", "Homme", "1992-03-17");
$isaacOscar = new Acteur("Isaac", "Oscar", "Homme", "1979-03-09");
$fisherCarrie = new Acteur("Fisher", "Carrie", "Femme", "1956-10-21");
$fordHarrison = new Acteur("Ford", "Harrison", "Homme", "1942-07-13");
$hauerRutger = new Acteur("Hauer", "Rutger", "Homme", "1944-01-23");
$youngSean = new Acteur("Young", "Sean", "Femme", "1959-11-19");
$olmosEdwardJ = new Acteur("Olmos", "Edward James", "Homme", "1947-02-24");
$hannahDary = new Acteur("Hannah", "Dary", "Femme", "1960-12-03");

// Tableau des films

$starWars = new Film("Star Wars - Le reveil de la force", "2015-12-16", 138, $abramsJJ, $scienceFi);
$bladeRunner = new Film("Blade Runner", "1982-09-15", 111, $ridleyScott, $scienceFi);

echo $scienceFi->afficherFilms();

echo $abramsJJ->afficherFilms();