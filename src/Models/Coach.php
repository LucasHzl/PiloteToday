<?php

class Coach {
    public $id_coach;
    public $firstName;
    public $lastName;

    public function getId_coach() {
      return $this->id_coach;
    }
    public function setId_coach($value) {
      $this->id_coach = $value;
    }

    public function getFirstName() {
      return $this->firstName;
    }
    public function setFirstName($value) {
      $this->firstName = $value;
    }

    public function getLastName() {
      return $this->lastName;
    }
    public function setLastName($value) {
      $this->lastName = $value;
    }
}