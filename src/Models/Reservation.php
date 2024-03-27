<?php

class Reservation {
    private $id_reservation;
    private $id_user;
    private $id_coach;
    private $date;

    public function getId_reservation() {
      return $this->id_reservation;
    }
    public function setId_reservation($value) {
      $this->id_reservation = $value;
    }

    public function getId_user() {
      return $this->id_user;
    }
    public function setId_user($value) {
      $this->id_user = $value;
    }

    public function getId_coach() {
      return $this->id_coach;
    }
    public function setId_coach($value) {
      $this->id_coach = $value;
    }

    public function getDate() {
      return $this->date;
    }
    public function setDate($value) {
      $this->date = $value;
    }
}