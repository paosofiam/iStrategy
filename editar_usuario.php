<?php

$_PUT = json_decode(file_get_contents('php://input'),true);

if($_PUT['data']){
    if($_PUT['data']['password1'] === $_PUT['data']['password2']){
        $id = $_PUT['data']['ID'];
        $password = $_PUT['data']['password1'];
        $data = array(
            "username" => $_PUT['data']['username'],
            "email" => $_PUT['data']['email'],
            "password" => $password,
            "gender" => $_PUT['data']['gender'],
            "remember" => $_PUT['data']['remember']
        );
        $users_controller = new usersController();
        $users_controller->update($data,$id);
    }
    else{

    }
}