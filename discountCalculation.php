<?php
function discountCalculation($price, $discount)
{
    // ডিস্কাউন্ট হিসাব করা হল
    return $price * ($discount / 100);
}
$Orginal = 2000;
// ফংশন কে কল করা হল ও পেরা মিটারে মান দেয়া হল
$After_discount = discountCalculation($Orginal, 10);
echo "ডিস্কাউন্ট এমাউন্ট প্রদর্শন করা হল {$After_discount}";

echo "</hr>";