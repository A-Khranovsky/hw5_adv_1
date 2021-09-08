<?php
require_once '../src/Currency.php';
require_once '../src/Money.php';

$money1 = new Money(100, new Currency('USD'));
var_dump($money1);
