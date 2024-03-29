<?php

class UsersRepository extends Database {

public function getAllUsers() {
        $database = $this->getDb();

        $request = 'SELECT * FROM users';

        $statement = $database->query($request);

        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class );

        return $users;
    }

    public function findUserById($id_user)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE id = :id_user');

        $req->execute([
            'id_user' => $id_user
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, User::class);

        return $req->fetch();
    }

    public function findUserByFirstName($UserFirstName)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE firstName = :firstName');

        $req->execute([
            'firstName' => $UserFirstName
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, User::class);

        return $req->fetch();
    }

    public function findUserBylastName($UserLastName)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE lastName = :lastName');

        $req->execute([
            'lastName' => $UserLastName
        ]);

        $req->setFetchMode(PDO::FETCH_CLASS, User::class);

        return $req->fetch();
    }

    public function createUser($firstName, $lastName, $email, $password)
    {
        $query = 'INSERT INTO users (firstName, lastName, email, password) 
        VALUES (:firstName, :lastName, :email, :password)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
        ]);
    }

    public function deleteUser($id_user)
    {
        $query = 'DELETE FROM users WHERE id = :id_user';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_user' => $id_user
        ]);
    }

    public function updateUser($id_user, $firstName, $lastName, $email, $password)
    {
        $query = 'UPDATE users set firstName = :firstName, lastName = :lastName, email = :email
        , password = :password WHERE id_user = :id_user';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_user' => $id_user,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password
        ]);
    }
}
