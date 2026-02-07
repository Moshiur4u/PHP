<?php
//Nested_if Example 
$Score = 70;
$Grade = "";
if ($Score >= 80) {
    $Grade = "A+";
} else {
    if ($Score >= 70) {
        $Grade = "A";
    } else {
        if ($Score >= 60) {
            $Grade = "B";
        } else {
            if ($Score >= 33) {
                $Grade = "C";
            } else {
                echo "Your Fail Try Again";
            }
        }
    }
}
echo "Congratulations- $Grade";
echo "<hr>";
//Example------
echo "<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        if ($j == 2) {
            break; // Breaks inner loop only
        }
        echo "($i,$j) ";
    }
}
echo "\n\n";

//Example--------
echo "<br>";
$x = 0;
do {
    $y = 0;
    do {
        echo "($x, $y)";
        $y++;
    } while ($y < 2);
    echo "\n";
    $x++;
} while ($x < 2);
//Example---
echo "<br>";
$i = 0;
do {
    $j = 0;
    do {
        if ($j == 1) {
            break; // Break inner loop when j equals 1
        }
        echo "($i, $j) ";
        $j++;
    } while ($j < 3);
    echo "\n";
    $i++;
} while ($i < 2);
