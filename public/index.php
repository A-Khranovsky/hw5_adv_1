<?php
require_once '../vendor/autoload.php';

$money1 = new App\Money(100, new App\Currency('USD'));
$money2 = new App\Money(100, new App\Currency('USD'));
$money3 = new App\Money(100, new App\Currency('EUR'));
echo 'money1: '.$money1->getAmount().' '.$money1->getCurrency()->getIsoCode().'<br>';
echo 'money2: '.$money2->getAmount().' '.$money2->getCurrency()->getIsoCode().'<br>';
echo 'money3: '.$money3->getAmount().' '.$money3->getCurrency()->getIsoCode().'<br>';
if ($money1->equals($money2)) {
    echo 'money1 equals money2 <br>';
}
else {
    echo 'money1 not equals money2 <br>';
}

if ($money1->equals($money3)) {
    echo 'money1 equals money3 <br>';
}
else {
    echo 'money1 not equals money3 <br>';
}

$money4 = $money1->add($money2);
echo 'money4 = money1 + money2 = '.$money4->getAmount().' '.$money4->getCurrency()->getIsoCode().'<br>';
