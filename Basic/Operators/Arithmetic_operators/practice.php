<?php
$a = 10;
$b = 3;
// Addition
$sum = $a + $b;
echo "Sum:- " . $sum . "<br>"; // Output: Sum: 13
// Subtraction
$difference = $a - $b;
echo "Difference:- " . $difference . "<br>"; // Output: Difference: 7
// Multiplication
$product = $a * $b;
echo "Product:- " . $product . "<br>"; // Output: Product: 30
// Division
$quotient = $a / $b;
echo "Quotient:- " . $quotient . "<br>"; // Output: Quotient: 3.3333333333333
// Modulus
$remainder = $a % $b;
echo "Remainder:- " . $remainder . "<br>"; // Output: Remainder: 1
// Exponentiation
$power = $a ** $b;
echo "Power:- " . $power . "<br>"; // Output: Power: 1000
// Combined example
$combined = ($a + $b) * ($a - $b) / $b;
echo "Combined Result:- " . $combined . "<br>"; // Output: Combined Result: 43.333333333333
// Using arithmetic operators in a real-world scenario
$price = 50;
$quantity = 3;
$totalCost = $price * $quantity;
$discount = 10; // 10%
$finalCost = $totalCost - ($totalCost * $discount / 100);
echo "Final Cost after discount:- " . $finalCost . "<br>"; // Output: Final Cost after discount: 135
// Increment and Decrement
$count = 5;
$count++;
echo "Incremented Count:- " . $count . "<br>"; // Output: Incremented
$count--;
echo "Decremented Count:- " . $count . "<br>"; // Output: Decremented
// Complex expression
$result = (($a + $b) * 2 - ($b ** 2)) / $a;
echo "Complex Expression Result:- " . $result . "<br>"; // Output: Complex Expression
?> // Output: Complex Expression Result: 2.6