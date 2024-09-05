<?php

require_once "app/controller.php";

session_start();

$_POST = json_decode(file_get_contents('php://input'),true);

$response = array(
    'message' => 'Error',
    'received' => $_POST
);

if($_POST['info']){
    $users_controller = new usersController();
    $responseDB = $users_controller->login($_POST['info']['email']);
    if($responseDB){
        if($_POST['info']['password'] === $responseDB['password']){
            //session start
            $response['message'] = "Welcome";
            $response['login'] = true;
            $_SESSION['id'] = $responseDB['ID'];
            $_SESSION['email'] = $responseDB['email'];
            $_SESSION['username'] = $responseDB['username'];
        }
        else{
            //code if password is incorrect
            $response['message'] = "Error: Password Incorrect";
            $response['found'] = $responseDB;
        }
    }
    else{
        //code if there are no results
        $response['message'] = "User not found";
    }
}

echo json_encode($response);