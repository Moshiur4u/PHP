<<<<<<< HEAD
=======
<?php
// Interface & Implement
interface Accounterface
{
    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}

class SavingAccount implements Accounterface
{
    public $accountNumber;
    public $balance;
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function deposit($amount)
    {
    }
    public function withdraw($amount)
    {
    }
}

class currentAccount implements Accounterface
{
    public $accountNumber;
    public $balance;
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function deposit($amount)
    {
    }
    public function withdraw($amount)
    {
    }
}
$SavingAccountDetails = new SavingAccount("12345", 2000);
echo $SavingAccountDetails->getBalance();
>>>>>>> 902f0753d1f69e7add9ecc5ad3e6361cb483f727
