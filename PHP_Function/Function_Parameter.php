<?php

// সিম্পল ফংশন প্যারামিটার
function greet($name)
{
    echo "Hello, " . $name . "!";
}

greet("Rahim");  // Output: Hello, Rahim!


// মাল্টিপল প্যারামিটার
function add($num1, $num2)
{
    return $num1 + $num2;
}

echo add(5, 10);  // Output: 15


// ডিফল্ট প্যারামিটার
function welcome($name = "Guest")
{
    echo "Welcome, " . $name;
}

welcome();        // Output: Welcome, Guest
welcome("Ali");   // Output: Welcome, Ali


// টাইপ হিন্টিং
function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo multiply(4, 5);  // Output: 20
