<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\PaymentMethodEnum;
use App\Enums\IncomeTypeEnum;
use App\Enums\WithdrawalTypeEnum;

require("vendor/autoload.php");

$withdrawal_controller = new WithdrawalsController();
$incomes_controller = new IncomesController();

// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BanckAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 20,
//     "description" => "Pago de mi salario por mi arduo y muy buen trabajo"
// ]);

// $withdrawal_controller->store([
//     "payment_method" => PaymentMethodEnum::CreditCard->value,
//     "type" => WithdrawalTypeEnum::Purchase->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 55,
//     "description" => "Esto es una primera prueba."
// ]);

$withdrawal_controller->show(1);
?>