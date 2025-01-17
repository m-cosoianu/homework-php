<?php
class CheckingAccount extends BankAccount

{
private $minBalance;
public function __construct($amount, $minBalance)
{
if ($amount > 0 && $amount => $minBalance) {
}
parent::__construct($amount);
$this->minBalance = $minBalance;
} else {
throw new InvalidArgumentException('blah blah');
}
}
public function withdraw($amount)
{
$canWithdraw = $amount > 0 &&
$this->getBalance() - $amount > $this->minBalance;

if ($canWithdraw) {
parent::withdraw($amount);
return true;
}
return false;
}
?>