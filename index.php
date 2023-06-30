<?php

// Auto-load des fichiers contenant les classes requises
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

// Genres
$scienceFi = new Genre("Science-fiction");
$aventure = new Genre("Aventure");
$action = new Genre("Action");

// Rôles
$rey = new Role("Rey");

// Réalisateurs
$abramsJJ = new Realisateur("Abrams", "Jeffrey Jacob", "Homme", "1966-06-27");
$ridleyScott = new Realisateur("Ridley", "Scott", "Homme", "1937-11-30");

// Acteurs
$ridleyDaisy = new Acteur("Ridley", "Daisy", "Femme", "1992-04-10", $rey);
$boyegaJhon = new Acteur("Boyega", "Jhon", "Homme", "1992-03-17", $rey);
$isaacOscar = new Acteur("Isaac", "Oscar", "Homme", "1979-03-09", $rey);
$fisherCarrie = new Acteur("Fisher", "Carrie", "Femme", "1956-10-21", $rey);
$fordHarrison = new Acteur("Ford", "Harrison", "Homme", "1942-07-13", $rey);
$hauerRutger = new Acteur("Hauer", "Rutger", "Homme", "1944-01-23", $rey);
$youngSean = new Acteur("Young", "Sean", "Femme", "1959-11-19", $rey);
$olmosEdwardJ = new Acteur("Olmos", "Edward James", "Homme", "1947-02-24", $rey);
$hannahDary = new Acteur("Hannah", "Dary", "Femme", "1960-12-03", $rey);

// Films
$starWars = new Film(
    "Star Wars - Le reveil de la force",
    "2015-12-16",
    138, $abramsJJ,
    array($ridleyDaisy, $boyegaJhon, $isaacOscar, $fisherCarrie, $fordHarrison),
    $scienceFi
);
$bladeRunner = new Film(
    "Blade Runner",
    "1982-09-15",
    111,
    $ridleyScott,
    array($fordHarrison, $hauerRutger, $youngSean, $olmosEdwardJ, $hannahDary),
    $scienceFi
);

echo $scienceFi->afficherFilms();

echo $abramsJJ->afficherFilms();

echo $rey->afficherActeurs();