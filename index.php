<?php

// Auto-load des fichiers contenant les classes requises
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

// Réalisateurs
$abramsJJ = new Realisateur("Abrams", "Jeffrey Jacob", "Homme", "1966-06-27");
$ridleyScott = new Realisateur("Ridley", "Scott", "Homme", "1937-11-30");
$timBurton = new Realisateur("Burton", "Tim", "Homme", "1958-08-25");
$joelSchumacher = new Realisateur("Schumacher", "Joel", "Homme", "1939-08-29");

// Rôles
$rey = new Role("Rey");
$finn = new Role("Finn");
$poeDameron = new Role("Poe Dameron");
$rickDeckard = new Role("Rick Deckard");
$hanSolo = new Role("Han Solo");
$leia = new Role("Leia");
$royBatty = new Role("Roy Batty");
$rachael = new Role("Rachael");
$gaff = new Role("Gaff");
$pris = new Role("Pris");
$batman = new Role("Batman");

// Acteurs
$ridleyDaisy = new Acteur("Ridley", "Daisy", "Femme", "1992-04-10", array($rey));
$boyegaJhon = new Acteur("Boyega", "Jhon", "Homme", "1992-03-17", array($finn));
$isaacOscar = new Acteur("Isaac", "Oscar", "Homme", "1979-03-09", array($poeDameron));
$fisherCarrie = new Acteur("Fisher", "Carrie", "Femme", "1956-10-21", array($leia));
$fordHarrison = new Acteur("Ford", "Harrison", "Homme", "1942-07-13", array($rickDeckard, $hanSolo));
$hauerRutger = new Acteur("Hauer", "Rutger", "Homme", "1944-01-23", array($royBatty));
$youngSean = new Acteur("Young", "Sean", "Femme", "1959-11-19", array($rachael));
$olmosEdwardJ = new Acteur("Olmos", "Edward James", "Homme", "1947-02-24", array($gaff));
$hannahDaryl = new Acteur("Hannah", "Daryl", "Femme", "1960-12-03", array($pris));
$KeatonMichael = new Acteur("Keaton", "Michael", "Homme", "1951-09-05", array($batman));
$ClooneyGeorge = new Acteur("Clooney", "George", "Homme", "1691-05-06", array($batman));

// Genres
$scienceFi = new Genre("Science-fiction");
$fantastique = new Genre("Fantastique");

// Films
$starWars = new Film(
    "Star Wars - Le reveil de la force",
    "2015-12-16",
    138,
    $abramsJJ,
    array($ridleyDaisy, $boyegaJhon, $isaacOscar, $fisherCarrie, $fordHarrison),
    array($rey, $finn, $poeDameron, $hanSolo, $leia),
    $scienceFi
);
$bladeRunner = new Film(
    "Blade Runner",
    "1982-09-15",
    111,
    $ridleyScott,
    array($fordHarrison, $hauerRutger, $youngSean, $olmosEdwardJ, $hannahDaryl),
    array($rickDeckard, $royBatty, $rachael, $gaff, $pris),
    $scienceFi
);
$batmanFilm = new Film(
    "Batman",
    "1989-09-13",
    126,
    $timBurton,
    array($KeatonMichael),
    array($batman),
    $fantastique
);
$batmanEtRobin = new Film(
    "Batman & Robin",
    "1997-07-09",
    125,
    $joelSchumacher,
    array($ClooneyGeorge),
    array($batman),
    $fantastique
);

// Liste des acteurs ayant incarné un rôle précis
echo $batman->afficherActeurs();

// Liste du casting d'un film
echo $starWars->afficherCasting();

// Liste des films d'un genre
echo $scienceFi->afficherFilms();

// Liste des films dans lesquels un acteur à joué
echo $fordHarrison->afficherFilms();

// Liste des films d'un réalisateur
echo $abramsJJ->afficherFilms();