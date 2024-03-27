<?php

$highway = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//Database global variables
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "pilotetoday");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "root");

//Highways to pages global variables
define("BASE_URL", "/projets/pilotetoday/public");
define("HOME_PAGE", BASE_URL . "/accueil");
define("CARS_PAGE", BASE_URL . "/voitures");
define("RACETRACK_PAGE", BASE_URL . "/circuit");
define("RESERVATION_PAGE", BASE_URL . "/reservation");
define("SIGNUP_PAGE", BASE_URL . "/inscription");
define("SIGNIN_PAGE", BASE_URL . "/connexion");



