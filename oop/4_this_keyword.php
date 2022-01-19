<?php

class BankAccount
{
    public $accountNumber;
    public $balance;
    public function accountnumber($accountNumber)
    {
        return $this->accountNumber=$accountNumber;
    }
    public function deposite($amount)
    {
        if($amount > 0)
        {
            return $this->balance+=$amount;
        }
        return false;
    }

    public function withdraw($amount)
    {
        if($amount <= $this->balance)
        {
            $this->balance-=$amount;
            return true;
        }
        return false;
    }

    public function Balance()
    {
        echo $this->balance;
    }
}

$account = new BankAccount();

echo $account->accountnumber(1112222333);
echo "\n";
echo $account->deposite(100);
echo "\n";
echo $account->withdraw(10);
echo "\n";
echo $account->Balance();
echo "\n";




?>