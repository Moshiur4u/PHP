<?php
// Increment and Decrement
$count = 5;
$count++;
echo "Incremented Count:- " . $count . "<br>"; // Output: Incremented
$count--;
echo "Decremented Count:- " . $count . "<br>"; // Output: Decremented
// Pre-increment
$preIncrement = ++$count;
echo "Pre-incremented Count:- " . $preIncrement . "<br>"; // Output: Pre-incremented
// Post-increment
$postIncrement = $count++;
echo "Post-incremented Count:- " . $postIncrement . "<br>"; // Output
echo "Count after Post-increment:- " . $count . "<br>"; // Output: Count after Post-increment
// Pre-decrement
$preDecrement = --$count;
echo "Pre-decremented Count:- " . $preDecrement . "<br>"; //
// Post-decrement
$postDecrement = $count--;
echo "Post-decremented Count:- " . $postDecrement . "<br>"; //
echo "Count after Post-decrement:- " . $count . "<br>"; //
// Using increment/decrement in expressions
$initial = 10;
$result = $initial++ + ++$initial;
echo "Result using increment in expression:- " . $result . "<br>"; // Output: Result using increment in expression
$result2 = $initial-- - --$initial;

echo "Result using decrement in expression:- " . $result2 . "<br>"; // Output: Result using decrement in expression
// Loop example with increment
echo "Loop with Increment:- <br>";
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
echo "<br>";
// Loop example with decrement
echo "Loop with Decrement:- <br>";
for ($j = 5; $j > 0; $j--) {
    echo $j . " ";
}
echo "<br>";
// Complex expression with increment/decrement
$complex = 5;
$complexResult = ++$complex + $complex-- + --$complex + $complex++;
echo "Complex Expression Result with Increment/Decrement:- " . $complexResult . "<br
>"; // Output: Complex Expression Result with Increment/Decrement
