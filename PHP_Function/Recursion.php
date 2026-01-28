<?php

// উদাহরণ ১: সংখ্যার ফ্যাক্টোরিয়াল
function factorial($n)
{
    if ($n <= 1) {
        return 1;  // Base case
    }
    return $n * factorial($n - 1);  // Recursive case
}

echo "5! = " . factorial(5) . "\n";  // Output: 120

// উদাহরণ ২: সংখ্যার যোগ (1 থেকে n পর্যন্ত)
function sumNumbers($n)
{
    if ($n == 0) {
        return 0;  // Base case
    }
    return $n + sumNumbers($n - 1);  // Recursive case
}

echo "Sum 1 to 5 = " . sumNumbers(5) . "\n";  // Output: 15

// উদাহরণ ৩: String কে বিপরীত করা
function reverseString($str)
{
    if (strlen($str) == 0) {
        return "";  // Base case
    }
    return reverseString(substr($str, 1)) . $str[0];  // Recursive case
}

echo "Reverse of 'hello' = " . reverseString("hello") . "\n";  // Output: olleh

// উদাহরণ ৪: Array এর যোগফল
function sumArray($arr, $index = 0)
{
    if ($index == count($arr)) {
        return 0;  // Base case
    }
    return $arr[$index] + sumArray($arr, $index + 1);  // Recursive case
}

$numbers = [1, 2, 3, 4, 5];
echo "Sum of array = " . sumArray($numbers) . "\n";  // Output: 15
