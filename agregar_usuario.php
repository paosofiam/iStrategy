<?php

require_once "app/controller.php";

$_POST = json_decode(file_get_contents('php://input'),true);

$response = array(
    'message' => 'Error',
    'received' => $_POST
);

if($_POST['info']){
    if($_POST['info']['password1'] === $_POST['info']['password2']){
        $password = $_POST['info']['password1'];
        $data = array(
            "username" => $_POST['info']['username'],
            "email" => $_POST['info']['email'],
            "password" => $password,
            "gender" => $_POST['info']['gender'],
            "remember" => $_POST['info']['remember']
        );
        $users_controller = new usersController();
        $users_controller->store($data);
        $response['message'] = "User added to DB";
    }
    else{
        $response['message'] = "Error: Passwords don't match";
    }
}

echo json_encode($response);