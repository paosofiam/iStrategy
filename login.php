<?php

$_POST = json_decode(file_get_contents('php://input'),true);

if($_POST['info']){
    $users_controller = new usersController();
    $response = $users_controller->login($_POST['info']['email']);
    if($response){
        if($_POST['info']['password'] === $response['password']){
            //session start
            echo json_encode(array('theMessage' => 'success'));
        }
        else{
            //code if password is incorrect
        }
    }
    else{
        //code if there are no results
    }
}