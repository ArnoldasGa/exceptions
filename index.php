<?php

include_once "BankAccount.php";
include_once "Exceptions\NotEnoughBalanceException.php";
include_once "Exceptions\NegativeAmountException.php";

$money = new BankAccount(100);

echo $money->widraw(105) . PHP_EOL;

echo $money->widraw(-1) . PHP_EOL;

echo $money->widraw(10) . PHP_EOL;

echo $money->widraw(90) . PHP_EOL;

