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
        $stmt = $this->connection->prepare("INSERT INTO users (payment_method, type, date, amount, description) VALUES (:payment_method,:type,:date,:amount,:description)");
        $stmt->execute($data);
    }

    public function show($id){//Shows a single item
        $stmt = $this->connection->prepare("SELECT*FROM users WHERE ID=:id");
        $stmt->execute([":id" => $id]);
        $result = $stmt->fetch();

        var_dump($result);
    }

    public function update($data,$id){//Updates a specific item
        $stmt = $this->connection->prepare("UPDATE users SET 
        payment_method = :payment_method,
        type = :type,
        date = :date,
        amount = :amount,
        description = :description 
        WHERE ID=:id");

        $stmt->execute([
            ":id" => $id,
            ":payment_method" => $data["payment_method"],
            ":type" => $data["type"],
            ":date" => $data["date"],
            ":amount" => $data["amount"],
            ":description" => $data["description"],
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
}