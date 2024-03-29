<?php

require_once __DIR__."/../Repositories/UsersRepository.php";

class UsersController {
    use Response;
    private $usersRepository;

    public function __construct() {
        $this->usersRepository = new UsersRepository;
    }

    public function signInPage() {
        $this->render("signIn");
    }

     public function profilPage() {
        $users =  $this->usersRepository->getAllUsers();
        $this->render("profil", ["users"=>$users]);
    }

    public function addUser() {
        $this->usersRepository->createUser($_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["password"]);
        echo'Votre inscription a bien été prise en compte !';
    }


}