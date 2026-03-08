<?php
class Account
{

    public $accountNumber;
    public $balanch;
    // construct এর মাধ্যমে  একাধিক ভারিয়াব্লে এর কাজ করা হয়।
    function __construct($accountNumber, $balanch)
    {
        $this->accountNumber = $accountNumber;
        $this->balanch = $balanch;
    }
    function getBalanch()
    {
        return $this->balanch;
    }

    function deposit($amount)
    {
        $this->balanch += $amount;
    }

    // উইথড্রলের জন্য লজিক কাজ করবে কারন  এখানে ব্যলেন্স চেক করতে হবে তার পর উত্তলন দিতে হবে।
    function withdraw($amount)
    {
        if ($amount > $this->balanch) {
            echo "Insaficiance balanch";
            return;
        }
        $this->balanch -= $amount;
    }
}
$MoshiurAccount = new Account("525020", 20000);
echo $MoshiurAccount->getBalanch();

$MoshiurAccount->deposit(5000);
echo PHP_EOL;
echo $MoshiurAccount->getBalanch();

$MoshiurAccount->withdraw(7000);
echo PHP_EOL;
echo $MoshiurAccount->getBalanch();

?>