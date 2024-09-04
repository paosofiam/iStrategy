<?php

$_POST = json_decode(file_get_contents('php://input'),true);

if($_POST['data']){
    $users_controller = new usersController();
    $response = $users_controller->login($_POST['data']['email']);
    if($response){
        if($_POST['data']['password'] === $response['password']){
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