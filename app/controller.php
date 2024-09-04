<?php

/* namespace App\Controllers; */

use Database\MySQLi\Connection;

class usersController {

    private $connection;

    public function __construct(){
        $this->connection=Connection::getInstance()->get_database_instance();
    }

    public function index(){//Shows the list with all items
        $stmt=$this->connection->prepare("SELECT*FROM users");
        $stmt->execute();
        $results = $stmt->fetchAll();

        var_dump($results);
    }

    public function store($data){//Saves the new item in the db
        $stmt = $this->connection->prepare("INSERT INTO users (username, email, password, gender, remember) VALUES (:username,:email,:password,:gender,:remember)");
        $stmt->execute($data);
    }

    /* public function show($id){//Shows a single item
        $stmt = $this->connection->prepare("SELECT*FROM users WHERE ID=:id");
        $stmt->execute([":id" => $id]);
        $result = $stmt->fetch();

        var_dump($result);
    } */

    public function update($data,$id){//Updates a specific item
        $stmt = $this->connection->prepare("UPDATE users SET 
        username = :username,
        email = :email,
        password = :password,
        gender = :gender,
        remember = :remember 
        WHERE ID=:id");

        $stmt->execute([
            ":id" => $id,
            ":username" => $data["username"],
            ":email" => $data["email"],
            ":password" => $data["password"],
            ":gender" => $data["gender"],
            ":remember" => $data["remember"],
        ]);
    }

    public function destroy($id){//Deletes a specific item
        $this->connection->beginTransaction();

        $stmt = $this->connection->prepare("DELETE FROM users WHERE ID=:id");
        $stmt->execute([":id" => $id]);

        $sure = readline("r u sure?");
        if ($sure == "y")
            $this->connection->commit();
        else
            $this->connection->rollBack();
    }

    public function login($email){//Shows a single item
        $stmt = $this->connection->prepare("SELECT*FROM users WHERE email=:email");
        $stmt->execute([":email" => $email]);
        $result = $stmt->fetch();

        return $result;
    }
}