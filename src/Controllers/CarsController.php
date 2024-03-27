<?php 

require_once __DIR__."/../Repositories/CarsRepository.php";

class CarsController {
    use View;
    private $carsRepository;

    public function __construct() {
        $this->carsRepository = new CarsRepository();
    }

    public function carsPage() {
        $cars = $this->carsRepository->getAllCars();
        echo $this->renderView("cars", ["cars"=>$cars]); 
    }

    
}