<?php 

require_once __DIR__."/../Repositories/CarsRepository.php";
require_once __DIR__."/../Repositories/CoachsRepository.php";

class ReservationsController {
    use Response;
    private $carsRepository;
    private $coachsRepository;
    
    public function __construct() {
        $this->carsRepository = new CarsRepository();
        $this->coachsRepository = new CoachsRepository();
    }
        
    public function reservationPage() {
        $coachs =  $this->coachsRepository->getAllCoachs();
        $cars = $this->carsRepository->getAllCars();
        $this->render("reservation", ["coachs"=>$coachs, "cars"=>$cars]);
    }
}