<?php
$limit = 6; // This can be set based on user input
$i = 2;
do {
    if ($i == 5) {
        break; // Exit loop when i equals 4
    }
    echo "i = $i\n";
    $i++;
} while ($i <= $limit);
echo "<br>";

//example 2