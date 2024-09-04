<?php

/* use App\Controllers\usersController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum; */

/* require("vendor/autoload.php"); */

$users_controller = new usersController();
/* $data = array(
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 123456,
    "description" => "music! 2"
); */



$users_controller->index();