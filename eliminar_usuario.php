<?php

$_DELETE = json_decode(file_get_contents('php://input'),true);

if($_DELETE['ID']){
    $users_controller = new usersController();
    $users_controller->destroy($_DELETE['ID']);
}