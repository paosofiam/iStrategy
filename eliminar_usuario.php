<?php

require_once "app/controller.php";

$_POST = json_decode(file_get_contents('php://input'),true);

$response = array(
    'message' => 'Error',
    'received' => $_POST
);

if($_POST['ID']){
    $users_controller = new usersController();
    $users_controller->destroy($_POST['ID']);
    $response['message'] = "User deleted from DB";
}

echo json_encode($response);