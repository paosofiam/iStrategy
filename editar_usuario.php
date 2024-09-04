<?php

require_once "app/controller.php";

$_PUT = json_decode(file_get_contents('php://input'),true);

if($_PUT['info']){
    if($_PUT['info']['password1'] === $_PUT['info']['password2']){
        $id = $_PUT['info']['ID'];
        $password = $_PUT['info']['password1'];
        $data = array(
            "username" => $_PUT['info']['username'],
            "email" => $_PUT['info']['email'],
            "password" => $password,
            "gender" => $_PUT['info']['gender'],
            "remember" => $_PUT['info']['remember']
        );
        $users_controller = new usersController();
        $users_controller->update($data,$id);
    }
    else{

    }
}