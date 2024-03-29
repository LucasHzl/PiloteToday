<?php

class User {
    public $id_user;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function getId_user() {
      return $this->id_user;
    }
    public function setId_user($value) {
      $this->id_user = $value;
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

    public function getEmail() {
      return $this->email;
    }
    public function setEmail($value) {
      $this->email = $value;
    }

    public function getPassword() {
      return $this->password;
    }
    public function setPassword($value) {
      $this->password = $value;
    }
}