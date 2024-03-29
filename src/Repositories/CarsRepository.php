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

    public function createCar($brand, $model)
    {
        $query = 'INSERT INTO cars (brand, model) 
        VALUES (:brand, :model)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'brand' => $brand,
            'model' => $model
        ]);
    }

    public function deleteCar($id_car)
    {
        $query = 'DELETE FROM cars WHERE iid_card = :id_car';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_car' => $id_car
        ]);
    }
}