<?php
// class Abastract & Extend
interface AccountInterface
{
    public function getBalance();
    public function deposit($amount);
    public function withdraw($amount);
}

// আবস্ট্রাক এর মধ্যে শুধু মাত্র যে কোড গুলো reuse করবো তাই লিখব ও ইন্টারফেজ কে ইমপলিমেন্ট করে দিব ।
//তা হলে আমরা যত যায়গাতে আবস্ট্রাক ব্যবহার করবো আট্মেটিক ভাবে ইন্টারফেজ কে ইমপলিমেন্ট করা হয়ে যাবে।
abstract class accountAbstractions implements AccountInterface
{
    private $accountNumber;
    private $balance;
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
}

// ইন্টারফেজ এর পরিবর্তে আবস্ট্রাক ক্লাস ব্যবহার  (এক্সটেন্ড ) করবো। তাতে কোড শুধু আবস্ট্রাক ক্লাস একবার লিখলে হবে। 
// বার বার লেখার দরকার হবে না 
class SavingAccount extends accountAbstractions
{

    public function withdraw($amount)
    {
    }
}

class currentAccount extends accountAbstractions
{
    public function withdraw($amount)
    {
    }
}

$SavingAccountDetails = new SavingAccount("525256", 50000);
echo $SavingAccountDetails->getBalance();

?>