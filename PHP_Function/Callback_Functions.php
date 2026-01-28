<?php

// Callback function
function greet($name) {
    return "Hello, " . $name;
}

// Function যা callback নেয়
function processCallback($callback, $param) {
    return $callback($param);
}

// Callback function pass করা
echo processCallback('greet', 'World');

// Anonymous callback
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($num) {
    return $num * $num;
}, $numbers);

print_r($squared);

?>