<?php

$homeController = new HomeController();
$carsController = new CarsController();
$racetrackController = new RacetrackController();
$reservationsController = new ReservationsController();
$notFoundController = new NotFoundController();
$UsersController = new UsersController();



switch ($highway) {
        case HOME_PAGE1:
        case HOME_PAGE2:
            $homeController->index();
        break;

        case CARS_PAGE:
            $carsController->carsPage();
        break;

        case RACETRACK_PAGE:
            $racetrackController->racetrackPage();
        break;

        case RESERVATION_PAGE:
            $reservationsController->reservationPage();
        break;

        case SIGNIN_PAGE:
            $UsersController->signInPage();
            if($_SERVER["REQUEST_METHOD"] === "GET") {

            }

            else if($_SERVER["REQUEST_METHOD"] === "POST") {
                $UsersController->addUser();
        }
        break;

        case PROFIL_PAGE:
            $UsersController->profilPage();
        break;
    
        default:
            $notFoundController->notFoundPage();
        break;
}

?>