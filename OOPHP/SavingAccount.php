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