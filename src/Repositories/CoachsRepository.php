<?php

class CoachsRepository extends Database {

    public function getAllCoachs() {
            $database = $this->getDb();

            $request = 'SELECT * FROM coachs';

            $statement = $database->query($request);

            $statement->execute();

            $coachs = $statement->fetchAll(PDO::FETCH_CLASS, Coach::class );

            return $coachs;
        } 
}