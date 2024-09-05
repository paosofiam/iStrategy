<?php

require_once "app/controller.php";

$_POST = json_decode(file_get_contents('php://input'),true);

$response = array(
    'message' => 'Error',
    'received' => $_POST
);

if($_POST['ID']){
    $users_controller = new usersController();
    $response = $users_controller->show($_POST['ID']);
}

echo json_encode($response);