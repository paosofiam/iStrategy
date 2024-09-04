<?php

$_POST = json_decode(file_get_contents('php://input'),true);

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
    }
    else{

    }
}