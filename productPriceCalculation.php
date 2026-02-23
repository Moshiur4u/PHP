<?php
$productId = 21;
$unitPrice = 100;
$quentity = 2;
$hasDiscount = true;
$Vat = 15;
$dicountRate = 15;

$subTotal = $unitPrice * $quentity;
echo "Subtotal Price Is - {$subTotal}\n";
$dicount = $hasDiscount ? ($subTotal * $dicountRate / 100) : 0;
echo "{$dicount}\n";
$totalPrice = $subTotal - $dicount;
echo "Total Price - {$totalPrice}\n";
$vatAmount = $totalPrice * 0.15;
echo "Discount Amount $vatAmount";
$grandTotal = $totalPrice + $vatAmount;
echo "total Price is - {$grandTotal}";