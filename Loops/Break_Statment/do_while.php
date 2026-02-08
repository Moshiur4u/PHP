<?php
$limit = 5;
$i = 2;
do {
    if ($i == 3) {
        break;
    }
    echo "i = .$i";
    $i++;
} while ($i <= $limit);