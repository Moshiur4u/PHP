<?php
// Basic ternary operator syntax: (condition) ? value_if_true : value_if_false

$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status; // Output: Adult

// Nested ternary operators
$score = 75;
$grade = ($score >= 90) ? "A" : (($score >= 80) ? "B" : (($score >= 70) ? "C" : "F"));
echo $grade; // Output: C

// Ternary with variables
$username = "John";
$greeting = isset($username) ? "Welcome, " . $username : "Welcome, Guest";
echo $greeting; // Output: Welcome, John

// Shorthand ternary (Elvis operator) - PHP 5.3+
$name = null;
$display = $name ?: "Unknown";
echo $display; // Output: Unknown
