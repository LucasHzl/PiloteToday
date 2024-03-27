<?php

$homeController = new HomeController();
$carsController = new CarsController();
$racetrackController = new RacetrackController();
$reservationsController = new ReservationsController();
//$AuthController = new AuthController();
$notFoundController = new NotFoundController();


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

        case SIGNUP_PAGE:
            $AuthController->signUpPage();
        break;

        case SIGNIN_PAGE:
            $AuthController->signInPage();
        break;
    
        default:
            $notFoundController->notFoundPage();
        break;
}

?>