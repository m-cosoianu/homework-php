<?php

require 'SavingAccount.php';

$account = new SavingAccount();
$account->deposit(100);

$account->setInterestRate(0.05);
$account->addInterest();
echo $account->getBalance();