<?php

class ReservationRepository extends Database {

    public function getAllreservation() {
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

    public function createReservation($id_user, $id_coach, $date, $id_car)
    {

        $id_user = 1;

        $query = 'INSERT INTO reservations (id_user, id_coach, date) 
        VALUES (:id_user, :id_coach, :date)';


        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_user' => $id_user,
            'id_coach' => $id_coach,
            'date' => $date
        ]);



        $query = 'INSERT INTO reservations_cars (id_car, id_reservation) 
        VALUES (:id_car, :id_user)'; 

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_car' => $id_car,
            'id_reservation' => $id_reservation,
        ]);
            }
}

