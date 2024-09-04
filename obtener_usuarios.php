<?php

/* use App\Controllers\usersController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum; */

/* require("vendor/autoload.php"); */
$_GET = json_decode(file_get_contents('php://input'),true);

if($_GET['data']){
    $users_controller = new usersController();
    $response = $users_controller->index();
    echo json_encode($response);
}