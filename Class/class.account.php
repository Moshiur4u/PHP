<?php
class Account
{
    // অব্জেক্টকে পাবলিক থেকে প্রিভেট করার মাধ্যমে encapsulation করা হয় জার ফলে অব্জেক্টকে বাহির থেকে অ্যাক্সেস করা জবে না ।
    private $accountNumber;
    private $balanch;
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
$moshiurAccount = new Account("525020", 20000);
echo $moshiurAccount->getBalanch();

$moshiurAccount->deposit(5000);
echo PHP_EOL;
echo $moshiurAccount->getBalanch();
// অব্জেচত পাবলিক থাকা অবথায় এই টা ডাইরেক্ট কোড অ্যাক্সেস করতে পারত ।
// $moshiurAccount->balanch = 10000;

$moshiurAccount->withdraw(7000);
echo PHP_EOL;
echo $moshiurAccount->getBalanch();

?>