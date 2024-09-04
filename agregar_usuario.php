<?php

$_POST = json_decode(file_get_contents('php://input'),true);

if($_POST['data']){
    if($_POST['data']['password1'] === $_POST['data']['password2']){
        $password = $_POST['data']['password1'];
        $data = array(
            "username" => $_POST['data']['username'],
            "email" => $_POST['data']['email'],
            "password" => $password,
            "gender" => $_POST['data']['gender'],
            "remember" => $_POST['data']['remember']
        );
        $users_controller = new usersController();
        $users_controller->store($data);
    }
    else{

    }
}