<?php

require_once "app/controller.php";

$_GET = json_decode(file_get_contents('php://input'),true);

if($_GET['info']){
    $users_controller = new usersController();
    $response = $users_controller->index();
    echo json_encode($response);
}