<?php
class SavingAccount extends BankAccount
{
    private  $interestRate;

    public function __construct($balance, $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }
public function addInterest()
{
    $interest = $this->interestRate * $this->getBalance();
    $this->deposit($interest);
}
}

$account = new SavingAccount();
$account-> deposit(100);

$account->setInterestRate(0.05);
$account->addInterest();

echo $account->getBalance();

//class CheckingAccount extends BankAccount
//
//{
//    private $minBalance;
//    public function __construct($amount, $minBalance)
//{
//    if ($amount > 0 && $amount => $minBalance) {
//}
//    parent::__construct($amount);
//    $this->minBalance = $minBalance;
//} else {
//    throw new InvalidArgumentException('blah blah');
//}
//}
//public function withdraw($amount)
//{
//    $canWithdraw = $amount > 0 &&
//        $this->getBalance() - $amount > $this->minBalance;
//
//    if ($canWithdraw) {
//        parent::withdraw($amount);
//        return true;
//    }
//    return false;
//}