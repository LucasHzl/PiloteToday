<?php

$highway = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//Database global variables
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "pilotetoday");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "root");

//Highways
define("BASE_URL", "/projets/pilotetoday/public");
define("HOME_PAGE1", BASE_URL . "/");
define("HOME_PAGE2", BASE_URL . "/accueil");
define("CARS_PAGE", BASE_URL . "/cars");
define("RACETRACK_PAGE", BASE_URL . "/racetrack");
define("RESERVATION_PAGE", BASE_URL . "/reservation");
define("SIGNIN_PAGE", BASE_URL . "/connexion");
define("PROFIL_PAGE", BASE_URL . "/compte");



