<?php

class CarsRepository extends Database {
     
    public function getAllCars() {
        $database = $this->getDb();

        $request = 'SELECT * FROM cars';

        $statement = $database->query($request);

        $statement->execute();

        $cars = $statement->fetchAll(PDO::FETCH_CLASS, Car::class );

        return $cars;
    } 
}