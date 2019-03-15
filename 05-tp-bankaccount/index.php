<?php

require_once 'BankAccount.php';
require_once 'SavingAccount.php';

$account = new BankAccount(1, 'Matthieu');

echo 'Matthieu a ' . $account->getBalance() . ' euros. <br />';
$account->depositMoney(5000);
echo 'Matthieu a ' . $account->getBalance() . ' euros. <br />';
$account->withdrawMoney(1000);
echo 'Matthieu a ' . $account->getBalance() . ' euros. <br />';

var_dump($account);

$livret = new SavingAccount(2, 'Matthieu');
$livret->depositMoney(1000000);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
$livret->applyInterest(0.75);
echo $livret->getBalance();

$account->wire(2000000, $livret);

var_dump($livret);
